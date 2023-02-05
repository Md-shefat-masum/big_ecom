<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user = [];
    protected $orders;
    public function render()
    {

        $this->user = Auth::user();
        if($this->user) {
            $this->orders = Order::where('user_id', $this->user->id)->paginate(20);
        }
        return view('livewire.profile', [
            "orders" => $this->orders
        ])->extends('frontend.layout', [
            'meta' => [
                "title" => "Profile page" . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);
    }
}
