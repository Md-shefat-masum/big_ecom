<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    protected $appends = [
        'date',
    ];

    public function getDateAttribute()
    {
        dd($this->option_values);
        return json_decode($this->option_values);
    }
}
