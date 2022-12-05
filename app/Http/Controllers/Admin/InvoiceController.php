<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\InvoiceOrder;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderMenu;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Decimal;

class InvoiceController extends Controller
{
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id',auth()->user()->id)->first();
        if($users->role != 'Admin')
        if($users->role != 'Cashier')
        {
            return redirect()->route('admin.index')->with('danger', 'this user does not have permission to access this module');
        }
        $invoices =Invoice::all();
        return view('admin.invoices.index', compact('invoices'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        $invoices = Invoice::where('id', $invoice->id)->get();
        $invoiceOrders= InvoiceOrder::where('invoice_id', $invoice->id)->get();
        $detailTotal= InvoiceOrder::where('invoice_id',$invoice->id)->get();
        $invoiceDetail = InvoiceDetail::where('invoice_id', $invoice->id)->first();
        foreach($detailTotal as $detail_total){
            $subtotal =+ $detail_total->total;
        }
        $itbis = $subtotal *0.28;
        $total = $subtotal + $itbis;

        if(!$invoiceDetail){
        $invoiceDetail = new InvoiceDetail();
        $invoiceDetail->invoice_id = $invoice->id;
        $invoiceDetail->subtotal = $subtotal;
        $invoiceDetail->itbis= $itbis;
        $invoiceDetail->total = $total;
        $invoiceDetail->save();

        }

        $invoiceDetails = InvoiceDetail::where('invoice_id', $invoice->id)->get();

        return view('admin.invoices.show', compact('invoices', 'invoiceDetails', 'invoiceOrders'));
    }


        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoices)
    {
        echo($invoices);
        // $invoices = Invoice::where('id',$invoices->id)->get();
        // $invoiceDetails = InvoiceOrder::where('invoice_id', $invoices->id)->get();
        // $detailTotal = InvoiceOrder::where('invoice_id',$invoices->id)->first();
        // return with($invoices);
        // return view('admin.invoice.show', compact('invoices', 'invoiceDetails'));
    }
}
