<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductOption;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as interImage;
use App\Exceptions\InvalidOrderException;
use App\Models\ProductOffer;
use Facade\FlareClient\Http\Response;
use Throwable;

class ProductController extends Controller
{

    public function list()
    {
        return view('admin.product.list');
    }

    public function list_json()
    {
        $products = Product::orderBy('id', 'DESC')
            ->with('related_image')
            ->select([
                'product_name',
                'default_price',
                'id',
            ])
            ->paginate(5);
        return $products;
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function create_campain()
    {
        return view('admin.product.campeing.create_campain');
    }

    public function edit_campeing($id)
    {
        return view('admin.product.campeing.edit_campain');
    }

    public function edit($id)
    {
        return view('admin.product.edit');
    }

    public function get_json($id)
    {
        $product = Product::where('id', $id)->with(['related_image'])->first();
        return response()->json([
            'product' => $product,
        ]);
    }

    public function get_campeing_json($id)
    {
        $campeing = ProductOffer::where('id',$id)->first();
        return response()->json($campeing,200);
    }

    public function store_product(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'product_name' => ['required'],
            'default_price' => ['required'],
            'brand_id' => ['required'],
            'selected_categories' => ['required', 'min:3'],
            'description' => ['required', 'min:50'],
            'upload_image' => ['required'],
            'search_keywords' => ['required'],
            'page_title' => ['required'],
            'product_url' => ['required', 'unique:products'],
            'meta_description' => ['required'],
            'track_inventory_on_the_variant_level_stock' => ['required', 'integer', 'min:1'],
            'track_inventory_on_the_variant_level_low_stock' => ['required', 'integer', 'min:1'],
        ], [
            'selected_categories.min' => 'No category is selected.',
            'upload_image.required' => 'No image selected.',
        ]);

        $product_info = $request->except([
            'selected_categories',
            'image',
            'bulk_pricing_discount_type',
            'selected_variant_options',
            'modifier_options',
            'custom_fields',
            'hs_codes',
            'custom_field_name',
            'custom_field_value',
            'variant_values',
            '_token',
            'Variant_(Read-only)',
            'purchasable',
            'Default_Price',
            'Image',
            'Stock',
            'SKU',
            'Sale_Price',
            'upload_image',
        ]);

        $product_info['bulk_pricing_discount_type'] = $request->bulk_pricing_discount_type;
        $product_info['selected_categories'] = $request->selected_categories;
        $product_info['selected_variant_options'] = $request->selected_variant_options;
        $product_info['modifier_options'] = $request->modifier_options;
        $product_info['custom_fields'] = $request->custom_fields;
        $product_info['hs_codes'] = $request->hs_codes;
        $product_info['variant_values'] = json_encode($request->variant_values);

        $related_iamges_id = [];
        if ($request->hasFile('upload_image')) {
            foreach ($request->file('upload_image') as $key => $image) {
                try {
                    $path = $this->store_product_file($image);
                    $id = ProductImage::insertGetId([
                        // 'product_id' => $product->id,
                        'product_id' => 0,
                        'image' => $path,
                        'creator' => Auth::user()->id,
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                    array_push($related_iamges_id, $id);
                } catch (Throwable $e) {
                    report($e);
                    return response()->json($e, 500);
                }
            }
        }

        // dd($related_iamges_id);

        if (count($related_iamges_id) > 0) {
            $product = Product::create($product_info);
            $product->categories()->attach(json_decode($request->selected_categories));

            for ($i = 0; $i < count($related_iamges_id); $i++) {
                $related_iamge = ProductImage::find($related_iamges_id[$i]);
                $related_iamge->product_id = $product->id;
                $related_iamge->save();
            }

            return [$product, $product_info, $request->all(), $request->file('upload_image')];
        } else {
            return response()->json('Upload valid jpg or jpeg image.', 500);
        }
    }

    public function update_product(Request $request)
    {

        $product_info = $request->except([
            'selected_categories',
            'image',
            'bulk_pricing_discount_type',
            'selected_variant_options',
            'modifier_options',
            'custom_fields',
            'hs_codes',
            'custom_field_name',
            'custom_field_value',
            'variant_values',
            '_token',
            'Variant_(Read-only)',
            'purchasable',
            'Default_Price',
            'Image',
            'Stock',
            'SKU',
            'Sale_Price',
            'upload_image',
        ]);

        $product_info['bulk_pricing_discount_type'] = $request->bulk_pricing_discount_type;
        $product_info['selected_categories'] = $request->selected_categories;
        $product_info['selected_variant_options'] = $request->selected_variant_options;
        $product_info['modifier_options'] = $request->modifier_options;
        $product_info['custom_fields'] = $request->custom_fields;
        $product_info['hs_codes'] = $request->hs_codes;
        $product_info['variant_values'] = json_encode($request->variant_values);

        $product = Product::find($request->id);
        $product->fill($product_info);

        if ($request->hasFile('upload_image')) {
            // dd($request->file('upload_image'));
            foreach ($product->related_image()->get() as $single_imge) {
                if (file_exists(public_path($single_imge->image))) {
                    unlink(public_path($single_imge->image));
                }
            }
            ProductImage::where('product_id', $product->id)->delete();
            foreach ($request->file('upload_image') as $key => $image) {
                try {
                    $path = $this->store_product_file($image);
                    ProductImage::insert([
                        'product_id' => $product->id,
                        'image' => $path,
                        'creator' => Auth::user()->id,
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                } catch (Throwable $e) {
                    report($e);
                    return response()->json($e, 500);
                }
            }
        }

        $product->save();
        $product->categories()->sync(json_decode($request->selected_categories));

        // dd($product);

        $path = '';
        return [$path, $product, $product_info, $request->all(), $request->file('upload_image')];
    }

    public function store_product_file($image)
    {
        // $path = Storage::put('uploads/file_manager',$request->file('fm_file'));
        $file = $image;
        // dd($file);
        $extension = $file->getClientOriginalExtension();
        $temp_name  = uniqid(10) . time();

        $image = interImage::make($file);

        // main image
        // $path = 'uploads/product/product_' . $temp_name . '.' . $extension;
        // $image->save($path);
        // $this->image_save_to_db($path);

        // rectangle
        // $image->fit(848, 438, function ($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $path = 'uploads/file_manager/fm_image_848x438_' . $temp_name . '.' . $extension;
        // $image->save($path);
        // $this->image_save_to_db($path);

        // square
        $canvas = interImage::canvas(400, 400);
        $image->fit(400, 400, function ($constraint) {
            $constraint->aspectRatio();
        });
        $canvas->insert($image);
        $canvas->insert(interImage::make(public_path('ilogo.png')), 'bottom-right');

        $path = 'uploads/product/product_image_400x400_' . $temp_name . '.' . $extension;
        $canvas->save($path);

        return $path;
    }

    public function search(Request $request)
    {
        return view('admin.product.search');
    }

    public function option()
    {
        $options = ProductOption::orderBy('display_name', 'ASC')->where('status', 1)->get();
        return view('admin.product.option.options', compact('options'));
    }

    public function option_json()
    {
        return ProductOption::orderBy('display_name', 'ASC')->where('status', 1)->get();
    }

    public function create_option()
    {
        return view('admin.product.option.options_create');
    }

    public function edit_option($id)
    {
        $option = ProductOption::find($id);
        return view('admin.product.option.options_edit', compact('option'));
    }

    public function get_option($id)
    {
        return ProductOption::find($id);
    }

    public function check_option_exists(Request $request)
    {
        $key = $request->unique_name;
        if (ProductOption::where('unique_name', $key)->exists()) {
            $option = ProductOption::where('unique_name', $key)->first();
            if ($request->form_type == 'edit') {
                if ($option->display_name == $request->display_name && $option->id == $request->id) {
                    return 0;
                }
            }
            return 1;
        } else {
            return 0;
        }
    }

    public function store_option(Request $request)
    {
        $this->validate($request, [
            'display_name' => ['required'],
            'unique_name' => ['required', 'unique:product_options'],
        ]);
        // $request_data = $request->all();
        // $request_data['option_values'] = json_decode($request->option_values);
        $option = new ProductOption();
        $option->display_name = $request->display_name;
        $option->unique_name = $request->unique_name;
        $option->type = $request->type;
        $option->option_values = $request->option_values;
        $option->creator = Auth::user()->id;
        $option->save();
        $option->slug = $option->id . uniqid(5);
        $option->save();

        return $option;
    }

    public function update_option(Request $request)
    {
        $this->validate($request, [
            'display_name' => ['required'],
            'unique_name' => ['required'],
        ]);
        // $request_data = $request->all();
        // $request_data['option_values'] = json_decode($request->option_values);
        $option = ProductOption::find($request->id);
        $option->display_name = $request->display_name;
        $option->unique_name = $request->unique_name;
        $option->type = $request->type;
        $option->option_values = $request->option_values;
        $option->creator = Auth::user()->id;
        $option->save();

        return $option;
    }

    public function delete_option($id)
    {
        $option = ProductOption::find($id);
        $option->delete();
        return redirect()->back()->with('success', 'data deleted successfully.');
    }

    public function reviews()
    {
        return view('admin.product.reviews');
    }

    public function brands()
    {
        $brands = Brand::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.product.brand.brands', compact('brands'));
    }

    public function brands_json()
    {
        return Brand::where('status', 1)->orderBy('id', 'DESC')->get();
    }

    public function create_brands()
    {
        return view('admin.product.brand.create-brands');
    }

    public function edit_brands($id)
    {
        $brand = Brand::find($id);
        return view('admin.product.brand.edit-brands', compact('brand'));
    }

    public function store_brands(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'unique:brands']
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->creator = Auth::user()->id;
        $brand->save();
        $brand->slug = $brand->id . uniqid(5);
        $brand->save();
        return redirect()->back()->with('success', 'new brand created');
    }

    public function update_brands(Request $request)
    {
        $this->validate($request, [
            'name' => ['required']
        ]);

        $brand = Brand::find($request->id);

        if ($request->name != $brand->name) {
            $this->validate($request, [
                'name' => ['unique:brands']
            ]);
        }

        $brand->name = $request->name;
        $brand->creator = Auth::user()->id;
        $brand->save();
        $brand->slug = $brand->id . uniqid(5);
        $brand->save();
        return redirect()->back()->with('success', 'brand udated.');
    }

    public function categories()
    {

        $categories = Category::where("status", 1)
            ->where('parent_id', 0)
            ->get();

        $all_category = [];

        foreach ($categories as $key => $item) {
            $module = $item->name . '_' . $item->id;
            if (Category::where('parent_id', $item->id)->where('status', 1)->exists()) {
                $children = Category::where('parent_id', $item->id)->where("status", 1)->get();
                $temp_category = [];
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['child'] = $this->buildCategories($children, $item->id);
                $all_category[] = $temp_category;
            } else {
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['child'] = [];
                $all_category[] = $temp_category;
            }
        }
        $categories = $all_category;
        return view('admin.product.categories.categories', compact('categories'));
    }

    public static function static_categories_tree_json()
    {
        return (new self)->make_category_tree_array();
    }

    public function categories_tree_json()
    {
        return $this->make_category_tree_array();
    }

    private function buildCategories($children, $parent_id)
    {
        $result = array();
        foreach ($children as $row) {
            if ($row->parent_id == $parent_id) {
                if (Category::where('parent_id', $row->id)->where('status', 1)->exists()) {
                    $children = Category::where('parent_id', $row->id)->where("status", 1)->get();
                    $temp_category = [];
                    $temp_category['id'] = $row->id;
                    $temp_category['name'] = $row->name;
                    $temp_category['parent'] = $parent_id;
                    $temp_category['child'] = $this->buildCategories($children, $row->id);
                    $result[] = $temp_category;
                } else {
                    $temp_category['id'] = $row->id;
                    $temp_category['name'] = $row->name;
                    $temp_category['parent'] = $parent_id;
                    $temp_category['child'] = [];
                    $result[] = $temp_category;
                }
            }
        }
        return $result;
    }

    public function create_category()
    {
        $categories = $this->make_category_tree_array();
        $category_tree_view = $this->make_category_tree($categories, []);
        /*$categories = [
            [
                'id' => 11,
                'name' => 'child',
                'child' => [
                    [
                        'id' => 12,
                        'name' => 'child t-shirt',
                        'child' => [
                            [
                                'id' => 13,
                                'name' => 'child xxl'
                            ],
                        ]
                    ]
                ],
            ]
        ];*/
        return view('admin.product.categories.create', compact('categories', 'category_tree_view'));
    }

    public function edit_category($id, $category_name)
    {
        $category = Category::find($id);
        $categories = $this->make_category_tree_array();
        $category_tree_view = $this->make_category_tree($categories, $category);
        return view('admin.product.categories.edit', compact('category', 'categories', 'category_tree_view'));
    }

    public function category_data($id)
    {
        return Category::find($id);
    }

    public function make_category_tree_array()
    {
        $categories = Category::where("status", 1)
            ->where('parent_id', 0)
            ->get();

        $all_category = [];

        foreach ($categories as $key => $item) {
            $module = $item->name . '_' . $item->id;
            if (Category::where('parent_id', $item->id)->where('status', 1)->exists()) {
                $children = Category::where('parent_id', $item->id)->where("status", 1)->get();
                $temp_category = [];
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['parent'] = null;
                $temp_category['child'] = $this->buildCategories($children, $item->id);
                $all_category[] = $temp_category;
            } else {
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['parent'] = null;
                $temp_category['child'] = [];
                $all_category[] = $temp_category;
            }
        }

        return $all_category;
    }
    public function make_category_tree($categories, $default_category)
    {
        return view('admin.product.categories.category_tree_view', compact('categories', 'default_category'))->render();
    }

    public function store_category(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'url' => ['required', 'unique:categories', 'min:3'],
            // 'description' => ['required'],
            // 'parent_id' => ['required'],
            // 'template_layout_file' => ['required'],
            // 'sort_order' => ['required'],
            // 'default_product_sort' => ['required'],
            // 'category_image' => ['required'],
            // 'page_title' => ['required'],
            // 'meta_keywords' => ['required'],
            // 'meta_description' => ['required'],
            // 'search_keywords' => ['required'],
        ], [
            // 'url.min' => ['url is not valid'],
        ]);


        $category = Category::create($request->except('category_image'));
        $category->creator = Auth::user()->id;
        $category->save();
        $category->slug = $category->id . rand(1111, 9999) . Str::slug($request->name);
        $category->save();

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $path = Storage::put('/uploads/category_image', $file);
            $category->category_image = $path;
            $category->save();
        }

        $categories = $this->make_category_tree_array();
        $category_tree_view = $this->make_category_tree($categories, []);

        return response()->json([
            'categories' => $categories,
            'category_tree_view' => $category_tree_view,
        ]);
    }

    public function store_category_from_product_create(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent;
        $category->creator = Auth::user()->id;
        $category->save();
        $category->slug = $category->id . uniqid(5);
        $category->url = Str::slug($request->name) . $category->id . rand(1111, 9999);
        $category->save();

        return $category;
    }

    public function update_category(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'url' => ['required', 'min:3'],
            // 'description' => ['required'],
            // 'parent_id' => ['required'],
            // 'template_layout_file' => ['required'],
            // 'sort_order' => ['required'],
            // 'default_product_sort' => ['required'],
            // 'category_image' => ['required'],
            // 'page_title' => ['required'],
            // 'meta_keywords' => ['required'],
            // 'meta_description' => ['required'],
            // 'search_keywords' => ['required'],
        ], [
            // 'url.min' => ['url is not valid'],
        ]);

        // return dd($request->all());
        $category = Category::find($request->id);
        $category->fill($request->except('category_image'));
        $category->creator = Auth::user()->id;
        $category->save();

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $path = Storage::put('/uploads/category_image', $file);
            $category->category_image = $path;
            $category->save();
        }

        $categories = $this->make_category_tree_array();
        $category_tree_view = $this->make_category_tree($categories, $category);

        return response()->json([
            'categories' => $categories,
            'category_tree_view' => $category_tree_view,
        ]);
    }

    public function rearenge_category(Request $request)
    {
        if (!$request->parent_id) {
            $parent_id = 0;
        } else {
            $parent_id = $request->parent_id;
        }
        Category::where('id', $request->id)->update([
            'parent_id' => $parent_id,
        ]);
        return $request->all();
    }

    public function categorie_url_check(Request $request)
    {
        if (Category::where('url', $request->url)->exists()) {
            if ($request->has('id') && Category::where('url', $request->url)->where('id', $request->id)->exists()) {
                return response()->json(false);
            } elseif ($request->has('id') && Category::where('url', $request->url)->exists()) {
                return response()->json(true . '2nd');
            } else {
                return response()->json(false);
            }
        }
    }

    public function store_campeing(Request $request)
    {
        $this->validate($request, [
            'type' => ['required'],
            'name' => ['required'],
            'start_date' => ['required', 'before:end_date'],
            'end_date' => ['required', 'after:start_date'],
            'camp_selected_products' => ['required', 'min:10'],
            'image' => ['required'],
            'note' => ['required'],
        ], [
            'camp_selected_products.required' => 'no product selected'
        ]);

        $data = $request->except(['image','camp_selected_products']);
        $data['products'] = $request->camp_selected_products;

        try {
            if ($request->has('image')) {
                $file = $request->image;
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // square
                $canvas = interImage::canvas(600, 600);
                $image->fit(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image);
                $canvas->insert(interImage::make(public_path('ilogo.png')), 'bottom-right');

                $path = 'uploads/product_offer/product_offer_image_400x400_' . $temp_name . '.' . $extension;
                $canvas->save($path);

                $data['image'] = $path;
            }
        } catch (\Throwable $e) {
            // report($e);
            // abort(500, $e->getMessage());
            return response()->json('image uploading failed',500);
        }

        $data['creator'] = Auth::user()->id;
        $offer = ProductOffer::create($data);
        $offer->slug = $offer->id.time();
        $offer->save();

        return $offer;
    }

    public function update_campeing(Request $request)
    {
        $this->validate($request, [
            'type' => ['required'],
            'name' => ['required'],
            'start_date' => ['required', 'before:end_date'],
            'end_date' => ['required', 'after:start_date'],
            'camp_selected_products' => ['required', 'min:10'],
            'note' => ['required'],
        ], [
            'camp_selected_products.required' => 'no product selected'
        ]);

        $data = $request->except(['image','camp_selected_products']);
        $data['products'] = $request->camp_selected_products;

        try {
            if ($request->has('image')) {
                $file = $request->image;
                // dd($file);
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // square
                $canvas = interImage::canvas(600, 600);
                $image->fit(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image);
                $canvas->insert(interImage::make(public_path('ilogo.png')), 'bottom-right');

                $path = 'uploads/product_offer/product_offer_image_400x400_' . $temp_name . '.' . $extension;
                $canvas->save($path);

                $data['image'] = $path;
            }
        } catch (\Throwable $e) {
            // report($e);
            // abort(500, $e->getMessage());
            return response()->json('image uploading failed',500);
        }

        $data['creator'] = Auth::user()->id;
        $offer = ProductOffer::find($request->id);
        $offer->fill($data);
        $offer->save();

        return $offer;
    }

    public function list_campeing()
    {
        return view('admin.product.campeing.list');
    }

    public function list_campeing_json(Request $request)
    {
        if($request->has('show_type') && $request->show_type == 'campeing'){
            $campeings = ProductOffer::where('status',1)->where('type','campeing')->orderBy('id','DESC')->paginate(5);
        }
        else if($request->has('show_type') && $request->show_type == 'offer'){
            $campeings = ProductOffer::where('status',1)->where('type','offer')->orderBy('id','DESC')->paginate(5);
        }
        else if($request->has('show_type') && $request->show_type == 'date_over'){
            $campeings = ProductOffer::where('status',1)->where('end_date','<',Carbon::today())->orderBy('id','DESC')->paginate(5);
        }
        else if($request->has('show_type') && $request->show_type == 'deleted'){
            $campeings = ProductOffer::where('status',0)->orderBy('id','DESC')->paginate(5);
        }
        else{
            $campeings = ProductOffer::where('status',1)->orderBy('id','DESC')->paginate(5);
        }

        return response()->json($campeings,200);
    }

    public function delete_campeing(Request $request)
    {
        $offer = ProductOffer::where('id',$request->id)->first();
        $offer->status = 0;
        $offer->save();
        return response()->json('successfully deleted');
    }
}
