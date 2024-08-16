<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_id',
        'menu_item_id',
        'quantity',
        'subtotal',
    ];


    public function order(){

        return $this->belongsTo(Order::class);

    }
    public function menuItem(){

        return $this->belongsTo(MenuItem::class);

    }

}
