<?php

namespace App\Http\Controllers;

use App\Models\AccountPurchase;
use App\Models\AccountSale;
use App\Models\AccountTransfer;
use App\Models\Bank;
use App\Models\BankSale;
use App\Models\Customer;
use App\Models\DailySale;
use App\Models\Hold;
use App\Models\HoldItem;
use App\Models\Item;
use App\Models\Sale;
use App\Models\SaleCart;
use App\Models\SaleItem;
use App\Models\SaleReturn;
use App\Models\SaleReturnItem;
use App\Models\Transaction;
use App\Models\TransferSaleHistory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class SalesController extends Controller
{
    public function sales_list(){
        // dd(Sale::OrderBy('id','desc')
        // ->offset(2)
        // ->limit(1)
        // ->get());
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::with('sale_items')->orderBy('id', 'Desc')->get();
        return view('sales.sales-list', ['sales' => $sales]);
    }

    public function salesDelete(Request $request, $id){
        $sale = Sale::with('sale_items')->find($id);
        
        // Update Customer Account
        if($sale->customer_id){
            $account = AccountSale::where('customer_id', $sale->customer_id)->first();
            AccountSale::where('customer_id', $sale->customer_id)->update([
                'total' => $account->total - $sale->total,
                'receivable' => $account->receivable - $sale->receivable,
                'received' => $account->received - $sale->received,
                'balance' => ($account->receivable - $account->received) - $account->balance,
            ]);
        }

        // Update Stock
        foreach($sale->sale_items as $item){
            $database_item = Item::whereName($item->name)->first();
            // dd($database_item);
            Item::whereName($item->name)->update([
                'stock' => $database_item->stock + $item->quantity,
            ]);
        }

        // Delete Sales Items
        $sale->sale_items()->delete();
        // Delete Sale
        $sale->delete();

        $request->session()->flash('alert-success', 'Sale Deleted.');
        return back();
    }

    public function sale_detail($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleItem::where('sale_id', $id)->get();
        return view('sales.sale-detail', ['sales' => $sales]);
    }

    public function sale_return_detail($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleReturnItem::where('sale_return_id', $id)->get();
        // dd($sales);
        return view('sales.sale-return-detail', ['sales' => $sales]);
    }

    public function get_session_items(){
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function new_sale(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = Item::with(['category', 'manufacture'])->orderBy('id', 'Desc')->where('price', '!=', NULL)->get();
        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.new-sale', ['items' => $items, 'customers' => $customers]);
    }

    public function get_customers(){
        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.get-customers', compact('customers'));
    }

    public function add_customer(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:customers',
        ],[
            'name.required' => 'Name is required.',
            'address.required' => 'Address is required.',
            'phone.required' => 'Phone is required.',
        ]);
        $account = new Customer();
        $account->name = $request->name;
        // $account->u_name = $request->u_name;
        $account->address = $request->address;
        $account->phone = $request->phone;
        $account->type = $request->type;
        $account->save();

        $account_purchase = new AccountPurchase();
        $account_purchase->customer_id = $account->id;
        $account_purchase->save();

        $account_sale = new AccountSale();
        $account_sale->customer_id = $account->id;
        $account_sale->save();

        $account_transfer = new AccountTransfer();
        $account_transfer->customer_id = $account->id;
        $account_transfer->save();

        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.get-customers', compact('customers'));
    }

    public function get_customer_account_detail(Request $request){
        $account = AccountSale::where('customer_id', $request->id)->orderBy('id', 'Desc')->first();
        return $account;
    }

    public function new_sale_action(Request $request){
        $sale_cart = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        // SALE RETURN FUNCTIONS
        if($request->type == 'return'){
            if($sale_cart){

                $sale_return_tbl = new SaleReturn();
                if($request->customer != 'abc'){
                    $sale_return_tbl->customer_id = $request->customer;
                }
                else{
                    $sale_return_tbl->walking_customer = $request->customer;
                }
                $sale_return_tbl->current_date = $request->current_date;
                $sale_return_tbl->payment_method = $request->payment_method;
                $sale_return_tbl->type = $request->type;
                $sale_return_tbl->total_bill = $request->total_bill;
                $sale_return_tbl->previous_due = $request->previous_due;
                $sale_return_tbl->receivable = $request->receivable;
                if($request->discount_type){
                    $sale_return_tbl->discount_type = $request->discount_type;
                    $sale_return_tbl->discount = $request->discount;
                }
                $sale_return_tbl->received = $request->received;
                // $sale_return_tbl->remaining = $request->remaining;
                $sale_return_tbl->user_id = Auth::user()->id;
                $sale_return_tbl->save();

                $salesReturn = [];
                foreach($sale_cart as $id=>$sale){
                    $itm = Item::whereName($sale->name)->first();
                    $row = [];
                    $row['sale_return_id'] = $sale_return_tbl->id;
                    $row['brand_id'] = $itm->brand_id;
                    $row['name'] = $sale->name;
                    $diff = $sale->price - $itm->price;
                    $profit = $diff * $sale->quantity;
                    $row['price'] = $sale->price;
                    $row['discount'] = $sale->discount;
                    $row['new_price'] = $sale->new_price;
                    $row['quantity'] = $sale->quantity;
                    $row['total'] = $sale->total;
                    $row['profit'] = $profit;
                    $salesReturn[] = $row;
                    $item = Item::whereName($sale->name)->first();
                    Item::whereName($sale->name)->update([
                        'stock' => $item->stock + $sale->quantity,
                    ]);
                }
                SaleReturnItem::insert($salesReturn);
                $rows = SaleCart::where('user_id', Auth::user()->id)->get();
                foreach($rows as $row){
                    $row->delete();
                }
                return 'Thank you..!';
            }


        }

        // NEW SALE FUNCTIONS
        if($sale_cart){
            $sale_table = new Sale();
            if($request->customer != 'abc'){
                $sale_table->customer_id = $request->customer;
            }
            else{
                $sale_table->walking_customer = $request->customer;
            }
            $sale_table->current_date = $request->current_date;
            $sale_table->payment_method = $request->payment_method;
            $sale_table->type = $request->type;
            $sale_table->total_bill = $request->total_bill;
            $sale_table->previous_due = $request->previous_due;
            if($request->discount_type){
                $sale_table->discount_type = $request->discount_type;
                $sale_table->discount = $request->discount;
            }
            $sale_table->receivable = $request->receivable;
            $sale_table->received = $request->received;
            $sale_table->remaining = $request->remaining;
            $sale_table->user_id = Auth::user()->id;
            $sale_table->save();

            // $current_date = Carbon::now()->format('Y-m-d');
            $daily = DailySale::where('current_date', $request->current_date)->first();
            if($daily){
                DailySale::where('current_date', $request->current_date)->update([
                    'sale' => $daily->sale + $request->received,
                ]);
            }
            else{
                $daily_sale = new DailySale();
                $daily_sale->current_date = $request->current_date;
                $daily_sale->sale = $request->received;
                $daily_sale->save();
            }

            $sales = [];
            foreach($sale_cart as $id=>$sale){
                $itm = Item::whereName($sale->name)->first();
                $row = [];
                $row['sale_id'] = $sale_table->id;
                $row['brand_id'] = $itm->brand_id;
                $row['name'] = $sale->name;
                $diff = $sale->price - $itm->price;
                $profit = $diff * $sale->quantity;
                $row['price'] = $sale->price;
                $row['discount'] = $sale->discount;
                $row['new_price'] = $sale->new_price;
                $row['quantity'] = $sale->quantity;
                $row['total'] = $sale->total;
                $row['profit'] = $profit;
                $sales[] = $row;
                $item = Item::whereName($sale->name)->first();
                Item::whereName($sale->name)->update([
                    'stock' => $item->stock - $sale->quantity,
                ]);
            }
            SaleItem::insert($sales);
        }
        if($request->customer != 'abc'){
            // if($request->received < $request->receivable){
                $account = AccountSale::where('customer_id', $request->customer)->orderBy('id', 'desc')->first();
                if($account){
                    // AccountSale::where('customer_id', $request->customer)->update([
                    //     'total' => $account->total + $request->total_bill,
                    //     'receivable' => $account->receivable + $request->receivable - $account->balance,
                    //     'received' => $account->received + $request->received,
                    //     'balance' => $request->receivable - $request->received,
                    // ]);
                    $account_sale = new AccountSale();
                    $account_sale->customer_id = $request->customer;
                    $account_sale->total = $request->total_bill;
                    $account_sale->received = $request->received;
                    $account_sale->receivable = $request->total_bill - $request->received;
                    $account_sale->balance = (int)$account->balance + (int)($request->total_bill - $request->received);
                    $account_sale->save();
                }
                // else{
                //     $account_sale = new AccountSale();
                //     $account_sale->customer_id = $request->customer;
                //     $account_sale->total = $request->total_bill;
                //     $account_sale->received = $request->received;
                //     $account_sale->receivable = $request->total_bill - $request->received;
                //     $account_sale->balance = (int)$account->balance + ($request->total_bill - $request->received);
                //     $account_sale->save();
                // }
            // }

        }
        
        $rows = SaleCart::where('user_id', Auth::user()->id)->get();
        foreach($rows as $row){
            $row->delete();
        }
        return 'Thank you..!';
    }

    public function sale_print_urdu(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::orderBy('id', 'desc')->first();
        return view('print.sale-print-urdu')->with('sales', $sales);
    }

    public function sale_print_english(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::orderBy('id', 'desc')->first();
        if($sales){
            return view('print.sale-print-english')->with('sales', $sales);
        }
        else{
            return 'No Data Found';
        }
    }

    public function get_item_detail(Request $request){
        $item = Item::find($request->id);
        return $item;
    }

    public function get_customer_detail(Request $request){
        $account = AccountSale::where('customer_id', $request->id)->first();
        return $account;
    }

    public function add_item_to_session(Request $request){
        
        $item = Item::find($request->id);
        if($request->discount > 0){

            $total = $request->new_price * $request->qty;
        }
        else{
            $total = $request->price * $request->qty;
        }
        $cart = SaleCart::where(['item_id'=>$item->id, 'user_id'=>Auth::user()->id])->first();
        // if sale is empty then this the first product
        if($cart){
            SaleCart::where(['item_id'=>$item->id, 'user_id'=>Auth::user()->id])->update([
                'quantity' => $cart->quantity + $request->qty,
                'new_price' => $cart->new_price + $request->new_price,
                'total' => $cart->total + $total,
            ]);
            $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
            return view('sales.get-sale', compact('sales'));
        }
        else{
            $cart = new SaleCart();
            $cart->item_id = $item->id;
            $cart->user_id = Auth::user()->id;
            $cart->name = $item->name;
            $cart->price = $request->price;
            $cart->discount = $request->discount;
            $cart->new_price = $request->new_price;
            $cart->quantity = $request->qty;
            $cart->total = $total;
            $cart->save();
            $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
            return view('sales.get-sale', compact('sales'));
        }
    }

    public function add_item_to_hold_session(Request $request){
        $hold = new Hold();
        $hold->invoice_no = substr(str_shuffle("0123456789"), 0, 4);
        if($request->customer == 'abc'){
            $hold->walking_customer = $request->customer; 
        }
        else{
            $hold->customer_id = $request->customer;
        }
        $hold->user_id = Auth::user()->id;
        $mytime = Carbon::now();
        $hold->current_date = $mytime->toDateTimeString();
        $cartItems = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        $count = 0;
        foreach($cartItems as $key=>$item){
            $count++;
        }
        $hold->total = $count;
        $hold->save();

        $total = 0;
        foreach($cartItems as $key=>$item){
            $total += $item->price * $item->quantity; 
            $cart = new HoldItem();
            $cart->hold_id = $hold->id;
            $cart->item_id = $item->item_id;
            $cart->name = $item->name;
            $cart->price = $request->price;
            $cart->discount = $request->discount;
            $cart->new_price = $request->new_price;
            $cart->quantity = $item->quantity;
            $cart->total = $total;
            $cart->save();
        }
        $rows = SaleCart::where('user_id', Auth::user()->id)->get();
        foreach($rows as $row){
            $row->delete();
        }
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function get_item_from_hold_session(Request $request){
        $holds = Hold::where('user_id', Auth::user()->id)->get();
        return view('sales.retrieve-hold-items-into-modal', compact('holds'));
    }

    public function get_item_from_hold_into_list(Request $request){
        $hold = Hold::with('hold_item')->find($request->id);
        $total = 0;
        foreach($hold->hold_item as $key=>$item){
            $total += $item->price * $item->quantity; 
            $cart = new SaleCart();
            $cart->item_id = $item->item_id;
            $cart->user_id = Auth::user()->id;
            $cart->name = $item->name;
            $cart->price = $item->price;
            $cart->quantity = $item->quantity;
            $cart->total = $total;
            $cart->save();
        }
        foreach($hold->hold_item as $key=>$item){
            $item->delete();
        }
        $hold->delete();
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function delete_item_to_session(Request $request){
        $sale = SaleCart::find($request->id);
        $sale->delete();
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function get_receivable_amount(Request $request){
        echo 
        '<form>
            <input type="hidden" name="_token" value='.csrf_token().'>
            <div class="form-group">
                <label for="subtotal">Total Bill:</label>
                <input type="text" value='.$request->receivable.' class="form-control" name="order_amount">
            </div>
            <div class="form-group">
                <label for="order_quantity">Received:</label>
                <input type="text" class="form-control" name="order_quantity">
            </div>
            <div class="form-group">
                <label for="order_quantity">Change:</label>
                <input type="text" class="form-control" name="order_quantity">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>';
    }

    public function reset_page(Request $request){
        $sales = SaleCart::where('user_id', Auth::user()->id)->get();
        foreach($sales as $row){
            $row->delete();
        }
        return view('sales.get-sale', compact('sales'));
    }

    public function transfer_sales(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $current_date = Carbon::now()->format('Y-m-d');
        $bank_transfered_sale = BankSale::whereDate('created_at', $current_date)->sum('transaction');
        $total_sale = DailySale::where('current_date', $current_date)->sum('sale');
        $banks = Bank::where('is_active', TRUE)->orderBy('id', 'Desc')->get();
        $accounts = Customer::all();
        return view('sales.transfer-sale', ['remaining_sale' => $total_sale, 'banks' => $banks, 'accounts' => $accounts])->with('current_date', $current_date);
    }

    public function get_account_types(Request $request){
        $customers = Customer::where('type', $request->type)->get();
        return view('sales.get-account-names', ['customers' => $customers]);
    }

    public function search_transfer_sales(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $current_date = $request->current_date;
        $bank_transfered_sale = BankSale::whereDate('created_at', $current_date)->sum('transaction');
        $total_sale = DailySale::where('current_date', $current_date)->sum('sale');
        $banks = Bank::where('is_active', TRUE)->orderBy('id', 'Desc')->get();
        $accounts = Customer::all();
        return view('sales.transfer-sale', ['remaining_sale' => $total_sale, 'banks' => $banks, 'accounts' => $accounts])->with('current_date', $current_date);
    }

    public function transfer_previous_sale_into_today(Request $request){
        // dd($request->total_sale);
        $current_date = Carbon::now()->format('Y-m-d');
        if($request->current_date == $current_date){
            $request->session()->flash('alert-danger', 'You Cannot Transfer Today Sale.');
            return back();
        }
        $daily_sale = DailySale::where('current_date', $request->current_date)->first();
        DailySale::where('current_date', $request->current_date)->update([
            'sale' => 0,
        ]);
        $today_sale = DailySale::where('current_date', $current_date)->first();
        if($today_sale){
            DailySale::where('current_date', $current_date)->update([
                'sale' => $today_sale->sale + $request->total_sale,
            ]);
        }
        else{
            $today_new_sale = new DailySale();
            $today_new_sale->current_date = $current_date;
            $today_new_sale->sale = $request->total_sale;
            $today_new_sale->save();
        }
        $request->session()->flash('alert-success', 'Sales Transfered into ToDay Sale.');
        return redirect()->route('sales.transfer-sale');
    }

    public function transfer_sales_action(Request $request){
        // dd($request->all());
        if($request->amount > $request->remaining_sale){
            $request->session()->flash('alert-danger', 'You can not transfer more than'.$request->remaining_sale.' Amount');
            return back();
        }
        if($request->account_type){
            if($request->account_type == 'Cash'){
                if($request->bank){
                    $bank = Bank::find($request->bank);
                    Bank::where('id', $request->bank)->update([
                        'balance' => $bank->balance + $request->amount,
                    ]);
                    $bank_sale = new BankSale();
                    $bank_sale->bank_id = $request->bank;
                    $bank_sale->transaction = $request->amount;
                    $bank_sale->type = 'debit';
                    $bank_sale->save();
                    $daily_sale = DailySale::where('current_date', $request->current_date)->first();
                    DailySale::where('current_date', $request->current_date)->update([
                        'sale' => $daily_sale->sale - $request->amount,
                    ]);

                    // Transfer Sale History
                    $history = new TransferSaleHistory();
                    $history->account_type = $request->account_type;
                    $history->transaction_type = 'Credit';
                    $history->amount = $request->amount;
                    $history->note = $request->note;
                    $history->save();
                    $request->session()->flash('alert-success', 'Sales Transfered.');
                    return back();
                }
            }
            if($request->account_name == NULL){
                $request->session()->flash('alert-danger', 'Choose any Account Name');
                return back();
            }
            if($request->account_type == 'Customer'){
                
            }
            if($request->account_type == 'Vendor'){
                
            }
            
            $account = Customer::find($request->account_name);
            $account_transfer = AccountTransfer::where('customer_id', $request->account_name)->first();
            AccountTransfer::where('customer_id', $request->account_name)->update([
                'balance' => $account_transfer->balance + $request->amount,
            ]);
            $daily_sale = DailySale::where('current_date', $request->current_date)->first();
            DailySale::where('current_date', $request->current_date)->update([
                'sale' => $daily_sale->sale - $request->amount,
            ]);

            // // Transfer Sale History
            $history = new TransferSaleHistory();
            $history->account_type = $request->account_type;
            $history->transaction_type = 'Credit';
            $history->amount = $request->amount;
            $history->note = $request->note;
            $history->save();

            $request->session()->flash('alert-success', 'Sale Transfered.');
            return back();
        }
        return redirect()->route('sales.transfer-sale');
    }

    public function transfer_sales_history(){
        $history = TransferSaleHistory::all();
        return view('sales.transfer-sale-history', ['history' => $history]);
    } 

    public function getSkuProduct(Request $request){
        $item = Item::where('sku', $request->sku)->first();
        return $item;
    }

    public function SaleReturn(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleReturn::orderBy('id', 'DESC')->get();
        return view('sales.sales-return-list', ['sales' => $sales]);
    }
}