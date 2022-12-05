<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Enums\TableStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Invoice;
use App\Models\InvoiceOrder;
use App\Models\Menu;
use App\Models\OrderMenu;
use App\Models\Table;
use App\Models\User;
use Carbon\Carbon;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id',auth()->user()->id)->first();
        if($users->role != 'Admin')
        if($users->role != 'Cashier')
        if($users->role != 'Waiter')
        {
            return redirect()->route('admin.index')->with('danger', 'this user does not have permission to access this module');
        }
        $tables = Table::where('status', TableStatus::Unavaliable)->get();
        $orders = Order::where('status',OrderStatus::Active)->get();
        return view('admin.orders.index', compact('orders', 'tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::where('status', TableStatus::Unavaliable)->get();
        return view('admin.orders.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
            $table = Table::where('id', $request->table_id)->first();
            //validar por status de orden
            $orderT = Order::where('table_id', $request->table_id)->where('status',OrderStatus::Active)->get();
            $count = count($orderT);

            $position = (string)$request->customer_name;
            $position = 'Position '.$position;

            $order = Order::where('customer_name',$position)->where('status',OrderStatus::Active)->first();

            if($request->customer_name <= $table->guest_number && empty($order)){
                if($count  < $table->guest_number){
                    $order = new Order();
                    $order->table_id =  $request->table_id;
                    $order->order_date =  Carbon::now();
                    $order->status =  $request->status;
                    $order->customer_name =  $position;
                    $order->save();

                    return redirect()->route('admin.orders.index')->with('success', 'Order created successfully');
                }else{
                    return redirect()->route('admin.orders.index')->with('danger','Orders exceed the numbers of guests');
                }
            }else {
                return redirect()->route('admin.orders.create')->with('danger', 'does not exist this position or has already registered');
            }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order_menu = OrderMenu::where('order_id', $order->id)->get();
        $invoice = new Invoice();
        $invoice->order_id = $order->id;
        $invoice->position = $order->customer_name;
        $invoice->invoice_date = Carbon::now();
        $invoice->registered_by = auth()->user()->name;
        $invoice->save();

        if ($order_menu && count($order_menu)) {
            foreach ($order_menu as $index ) {
                $invoice_detail = new InvoiceOrder();
                $invoice_detail->invoice_id = $invoice->id;
                $invoice_detail->menu_id = $index->order_menu_id;
                $invoice_detail->quantity = $index->quantity;
                $invoice_detail->price = $index->price;
                $invoice_detail->total = $index->price * $index->quantity;
                $invoice_detail->save();

                $index->status = OrderStatus::Disable;
                $index->save();
            }
        }

        $order->status = OrderStatus::Disable;
        $order->save();



        return redirect()->route('admin.orders.index')->with('success', 'factura generada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $tables = Table::where('status', TableStatus::Avalaiable)->get();
        return view('admin.orders.edit', compact('order','tables'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice(Order $order)
    {
        $order_menu = OrderMenu::where('order_id', $order->id)->where('status',OrderStatus::Active)->get();
        $invoice = new Invoice();
        $invoice->order_id = $order->id;
        $invoice->position = $order->customer_name;
        $invoice->invoice_date = Carbon::now();
        $invoice->registered_by = auth()->user()->name;
        $invoice->save();

        if ($order_menu && count($order_menu)) {
            foreach ($order_menu as $index ) {
                $invoice_detail = new InvoiceOrder();
                $invoice_detail->invoice_id = $invoice->id;
                $invoice_detail->menu_id = $index->order_menu_id;
                $invoice_detail->quantity = $index->quantity;
                $invoice_detail->price = $index->price;
                $invoice_detail->total = $index->price * $index->quantity;
                $invoice_detail->save();
            }
        }

        $order->status = OrderStatus::Disable;
        $order->save();
        return redirect()->route('admin.orders.index')->with('success', 'factura generada correctamente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderStoreRequest $request, Order $order)
    {
        $order->update($request->validated());

        return to_route('admin.orders.index')->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order_menus = OrderMenu::where('order_id', $order->id)->get();

        //TODO: fix delete constraint order menu
        foreach($order_menus as $order_menu){
            $menu = Menu::where('id',$order_menu->order_menu_id)->first();
            $order->order_menu()->detach($menu->id);
        }
        $order->delete();

        return to_route('admin.orders.index')->with('danger', 'Order deleted successfully');
    }


}
