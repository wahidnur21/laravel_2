<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Requests\StorecustomersRequest;
use App\Http\Requests\UpdatecustomersRequest;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //query eloquen
        $customers = Customer::all(); 
        return view('customer.list', [
            'data' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecustomersRequest $request)
    {
        Customer::create($request->all());
        return redirect('/customers');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        return view('customer.add', [
            'data' => $customer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecustomersRequest $request, customer $customer)
    {
        $customer->fill($request->all());
        $customer->save();

         return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }
}
