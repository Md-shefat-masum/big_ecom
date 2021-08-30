<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_information()
    {
        return $this->hasMany('App\Models\OrderInformation','order_id','id');
    }
    public function order_address(){
        return $this->hasMany('App\Models\OrderAddress','user_id','user_id');
    }
}
