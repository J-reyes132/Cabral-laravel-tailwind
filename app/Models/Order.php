<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['table_id', 'order_date', 'customer_name', 'status'];

    protected $casts = [
        'status' => OrderStatus::class
    ];

    public function table(){
        return $this->belongsTo(Table::class);
    }
    public function authorize()
    {
        return true;
    }

    public function order_menu(){
        return $this->belongsToMany(OrderMenu::class, 'order_menus');
    }
}
