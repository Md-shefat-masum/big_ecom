<?php

namespace App\Models;

use App\Http\Livewire\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
        'hs_codes_json',
        'modifier_options_json',
        'category_json',
        'selected_variant_option_json',
        'bulk_pricing_discount_options_json',
        'custom_fields_json',
        'variant_values_json',
        'related_categories',
        'related_images',
        "total_description"
    ];

    public function getRelatedCategoriesAttribute()
    {
        if ($this->selected_categories) {
            $json_categories_id = json_decode($this->selected_categories);
            $category = [];
            // dd($json_categories_id,$this->selected_categories);

            foreach ($json_categories_id as $id) {
                if (Category::where('id', $id)->exists()) {
                    array_push($category, Category::where('id', $id)->select('id', 'name')->first());
                }
            }
            return $category;
        }
    }

    public function getTotalDescriptionAttribute()
    {
        $description_check = Str::contains($this->description, '<h2 style="margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; line-height: 26px;">Specification</h2>');
        
        if($description_check) {
            $description_split = explode('<h2 style="margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; line-height: 26px;">Specification</h2>' , $this->description);
            $key_fetures = $description_split[0];
            $specification = $description_split[1];

            if(Str::contains($key_fetures, '<p style="margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;"><br></p><p style="margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;"><br></p>')) {
                $key_fetures = Str::replace('<p style="margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;"><br></p>', '' ,$key_fetures);
            }

            return [
                "key_fetures" => $key_fetures,
                "main_description" => $specification,
            ];
        }
    }

    public function getRelatedImagesAttribute()
    {
        return ProductImage::where('product_id', $this->id)->get();
    }
    public function getHsCodesJsonAttribute()
    {
        if (isset($this->hs_codes)) {
            return json_decode($this->hs_codes);
        }
        return 0;
    }
    public function getModifierOptionsJsonAttribute()
    {
        if (isset($this->modifier_options)) {
            return json_decode($this->modifier_options);
        }
        return 0;
    }
    public function getVariantValuesJsonAttribute()
    {
        if (isset($this->variant_values)) {
            return json_decode($this->variant_values);
        }
        return 0;
    }

    public function getCategoryJsonAttribute()
    {
        if (isset($this->selected_categories)) {
            return json_decode($this->selected_categories);
        }
        return 0;
    }

    public function getCustomFieldsJsonAttribute()
    {
        if (isset($this->custom_fields)) {
            return json_decode($this->custom_fields);
        }
        return 0;
    }

    public function getBulkPricingDiscountOptionsJsonAttribute()
    {
        if (isset($this->bulk_pricing_discount_options)) {
            return json_decode($this->bulk_pricing_discount_options);
        }
        return 0;
    }

    public function getSelectedVariantOptionJsonAttribute()
    {
        if (isset($this->selected_variant_options)) {
            return json_decode($this->selected_variant_options);
        }
        return 0;
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }

    public function related_image()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function discounts() {
        return $this->hasOne(DiscountProduct::class, 'product_id');
    }

    public function brand() {
        return $this->hasOneThrough(Brand::class, CategoryProduct::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
