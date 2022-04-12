<?php

namespace App\Http\Controllers;


use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function list()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        // dd($activeCustomers);
        
        // $customers = Customer::all();

        // dd($customers);

        return view('internals.customers', compact('activeCustomers','inactiveCustomers', 'companies'));
        // [
 
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers
        
        //     // 'customers' => $customers,
        // ]);
    }

    public function store()
    {
        $data = request()->validate([

            'name' => 'required',
            'email' => 'required',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->company_id = request('company_id');
        $customer->save();

        return back();
    }
}


