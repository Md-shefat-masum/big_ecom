<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
            'category_json',
            'selected_variant_option_json'
    ];

    public function getCategoryJsonAttribute()
    {
        return json_decode($this->selected_categories);
    }

    public function getSelectedVariantOptionJsonAttribute()
    {
        return json_decode($this->selected_variant_options);
    }
}
