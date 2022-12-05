<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function invoice_order(){
        return $this->belongsToMany(InvoiceOrder::class, 'invoice_orders');
    }

}
