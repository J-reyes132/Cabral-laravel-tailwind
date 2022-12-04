<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderMenu;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orders)
    {
        $orderMenus = OrderMenu::where('order_id', $orders->id)->get();
        return view('admin.menus.edit', compact('orders', 'orderMenus'));
    }


}
