<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Enums\TableStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderMenuRequest;
use App\Http\Requests\OrderMenuStoreRequest;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Menu;
use App\Models\OrderMenu;
use App\Models\Table;
use Carbon\Carbon;

class OrderMenuController extends Controller
{

    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order_menu)
    {

        $order_menu = OrderMenu::where('status', OrderStatus::Active)->get();//where('order_id', $order_menu->id)->get();
        return view('admin.ordersmenu.index', compact('order_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::where('status', OrderStatus::Active)->get();
        $menus = Menu::all();
        return view('admin.ordersmenu.create', compact('orders','menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderMenuRequest $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        $menu = Menu::where('id', $request->menu_id)->first();

        $order_menu = new OrderMenu();
        $order_menu->order_id =  $request->order_id;
        $order_menu->order_menu_id =  $request->menu_id;
        $order_menu->quantity =  $request->quantity;
        $order_menu->price =  $menu->price;
        $order_menu->status = OrderStatus::Active;
        $order_menu->save();


        return redirect()->route('admin.orders.index')->with('success', 'product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderMenu $ordersmenu)
    {
        $orders = Order::where('status', OrderStatus::Active)->get();
        $menus = Menu::all();
        return view('admin.ordersmenu.edit', compact('ordersmenu','orders', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderMenuRequest $request, OrderMenu $order_menu)
    {
        // $order_menu->update($request->validated());

        $menu = Menu::where('id', $request->menu_id)->first();
        $order_menu->order_id = $request->order_id;
        $order_menu->order_menu_id = $request->menu_id;
        $order_menu->price = $menu->price;
        $order_menu->quantity = $request->quantity;
        $order_menu->status = OrderStatus::Active;
        $order_menu->save();

        return to_route('admin.orders.index')->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderMenu $order_menus)
    {
       $order_menus::destroy($order_menus->id);

        return to_route('admin.orders.index')->with('danger', 'Order deleted successfully');
    }
}
