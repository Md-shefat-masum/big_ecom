<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    protected $appends = [
        'option_values_json',
    ];

    public function getOptionValuesJsonAttribute()
    {
        return json_decode($this->option_values);
    }

    public function function_name()
    {
       
    }
}
