<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Enums\TableStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Table;
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
        $orders = Order::where('status',OrderStatus::Active)->get();
        return view('admin.orders.index', compact('orders'));
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
    public function edit(Order $order)
    {
        $tables = Table::where('status', TableStatus::Avalaiable)->get();
        return view('admin.orders.edit', compact('order','tables'));
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

        //TODO: fix delete constraint order menu
        //$order->order_menu()->detach();
        $order->delete();

        return to_route('admin.orders.index')->with('danger', 'Order deleted successfully');
    }
}
