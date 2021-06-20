<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function view()
    {
        return view('admin.product.view');
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function search(Request $request)
    {
        return view('admin.product.search');
    }

    public function option()
    {
        $options = ProductOption::orderBy('display_name','ASC')->where('status',1)->get();
        return view('admin.product.option.options',compact('options'));
    }

    public function create_option()
    {
        return view('admin.product.option.options_create');
    }

    public function edit_option($id)
    {
        $option = ProductOption::find($id);
        return view('admin.product.option.options_edit',compact('option'));
    }

    public function get_option($id)
    {
        return ProductOption::find($id);
    }

    public function check_option_exists(Request $request)
    {
        $key = $request->unique_name;
        if(ProductOption::where('unique_name',$key)->exists()){
            $option = ProductOption::where('unique_name',$key)->first();
            if($request->form_type == 'edit'){
                if($option->display_name == $request->display_name && $option->id == $request->id){
                    return 0;
                }
            }
            return 1;
        }else{
            return 0;
        }
    }

    public function store_option(Request $request)
    {
        $this->validate($request,[
            'display_name' => ['required'],
            'unique_name' => ['required','unique:product_options'],
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
        $option->slug = $option->id.uniqid(5);
        $option->save();

        return $option;
    }

    public function update_option(Request $request)
    {
        $this->validate($request,[
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

    public function reviews()
    {
        return view('admin.product.reviews');
    }

    public function brands()
    {
        return view('admin.product.brands');
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
                    $temp_category['child'] = $this->buildCategories($children, $row->id);
                    $result[] = $temp_category;
                } else {
                    $temp_category['id'] = $row->id;
                    $temp_category['name'] = $row->name;
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
        $category_tree_view = $this->make_category_tree($categories,[]);
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

    public function edit_category($id,$category_name)
    {
        $category = Category::find($id);
        $categories = $this->make_category_tree_array();
        $category_tree_view = $this->make_category_tree($categories,$category);
        return view('admin.product.categories.edit', compact('category','categories', 'category_tree_view'));
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
                $temp_category['child'] = $this->buildCategories($children, $item->id);
                $all_category[] = $temp_category;
            } else {
                $temp_category['id'] = $item->id;
                $temp_category['name'] = $item->name;
                $temp_category['child'] = [];
                $all_category[] = $temp_category;
            }
        }

        return $all_category;
    }
    public function make_category_tree($categories,$default_category)
    {
        return view('admin.product.categories.category_tree_view', compact('categories','default_category'))->render();
    }

    public function store_category(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'url' => ['required', 'unique:categories','min:3'],
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
        ],[
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
        $category_tree_view = $this->make_category_tree($categories,[]);

        return response()->json([
            'categories' => $categories,
            'category_tree_view' => $category_tree_view,
        ]);
    }

    public function update_category(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'url' => ['required','min:3'],
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
        ],[
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
        $category_tree_view = $this->make_category_tree($categories,$category);

        return response()->json([
            'categories' => $categories,
            'category_tree_view' => $category_tree_view,
        ]);
    }

    public function rearenge_category(Request $request)
    {
        if(!$request->parent_id){
            $parent_id = 0;
        }else{
            $parent_id = $request->parent_id;
        }
        Category::where('id', $request->id)->update([
            'parent_id' => $parent_id,
        ]);
        return $request->all();
    }

    public function categorie_url_check(Request $request)
    {
        if(Category::where('url', $request->url)->exists()){
            if($request->has('id') && Category::where('url', $request->url)->where('id',$request->id)->exists()){
                return response()->json(false);
            }
            elseif($request->has('id') && Category::where('url', $request->url)->exists()){
                return response()->json(true.'2nd');
            }
            else{
                return response()->json(false);
            }
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
