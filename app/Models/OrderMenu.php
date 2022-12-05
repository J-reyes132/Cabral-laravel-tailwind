<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMenu extends Model
{
    use HasFactory;

    public function menu(){
        return $this->belongsTo(Menu::class, 'order_menu_id');
    }
    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
