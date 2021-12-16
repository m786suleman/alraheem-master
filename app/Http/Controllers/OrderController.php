<?php

namespace App\Http\Controllers;

use App\Models\SaleOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function saleOrders(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $orders = SaleOrder::all();
        return view('order.sale-orders', ['orders' => $orders]);
    }

    public function saleOrderForm(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $date = Carbon::now()->format('mdY');
        $sale = Sale::orderBy('id', 'DESC')->first();
        if($sale){
            $invoice = $date.$sale->id+1;
        }
        else{
            $invoice = $date."1";
        }
        $items = Item::with(['category', 'manufacture'])->orderBy('id', 'Desc')->get();
        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('order.sale-order-form', ['items' => $items, 'customers' => $customers])->with('invoice', $invoice);

    }
}
