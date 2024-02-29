<?php

namespace App\Http\Controllers;

use App\Models\customers;
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
        $customers = customer::all(); 
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
        return redirect('/customer');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecustomersRequest $request, customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customers $customers)
    {
        $customer->delete();
        return redirect('/customer');
    }
}
