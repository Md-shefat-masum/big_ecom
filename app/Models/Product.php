<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

 
    public function getHsCodesJsonAttribute()
    {
        return json_decode($this->hs_codes);
    }
    public function getModifierOptionsJsonAttribute()
    {
        return json_decode($this->modifier_options);
    }
    public function getVariantValuesJsonAttribute()
    {
        return json_decode($this->variant_values);
    }

    public function getCategoryJsonAttribute()
    {
        return json_decode($this->selected_categories);
    }

    public function getCustomFieldsJsonAttribute()
    {
        return json_decode($this->custom_fields);
    }

    public function getBulkPricingDiscountOptionsJsonAttribute()
    {
        return json_decode($this->bulk_pricing_discount_options);
    }

    public function getSelectedVariantOptionJsonAttribute()
    {
        return json_decode($this->selected_variant_options);
    }
    public function related_image(){
        return $this->hasMany(ProductImage::class,'product_id');
    }
}
