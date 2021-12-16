<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountPurchase;
use App\Models\AccountSale;
use App\Models\AccountTransfer;
use App\Models\Customer;
use App\Models\Item;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function accounts(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $customers = Customer::where('type', '!=', 'Admin')->orderBy('id', 'Desc')->get();
        $items = Item::with(['category', 'brand'])->orderBy('id', 'Desc')->get();
        return view('accounts.account-list', ['items' => $items,'customers' => $customers]);
    }

    public function edit_account($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $account = Customer::find($id);
        $customers = Customer::where('type', '!=', 'Admin')->orderBy('id', 'Desc')->get();
        return view('accounts.edit-account', ['customers' => $customers])->with('account', $account);
    }

    public function update_account(Request $request){
        $customer = Customer::find($request->id);
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:customers,phone,'.$customer->id,
        ],[ 
            'name.required' => 'Name is required.',
            'address.required' => 'Address is required.',
            'phone.required' => 'Phone is required.',
        ]);
        Customer::where('id', $request->id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
        ]);
        $request->session()->flash('alert-success', 'Account updated.');
        return redirect()->route('accounts');
    }

    public function delete_account(Request $request, $id){
        $account = Customer::find($id);
        $account->delete();
        $request->session()->flash('alert-success', 'One account removed.');
        return back();
    }

    public function create_new_account(Request $request){
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
        $account->price = $request->price;
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

        $request->session()->flash('alert-success', 'New account created.');
        return back();
    }


    public function saveCustomerProd($d){
        dd($d);
    }




}
