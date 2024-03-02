<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //query eloquen
          $categories = categori::all(); 
          return view('categori.list', [
              'data' => $categories,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoriesRequest $request)
    {
        categori::create($request->all());
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        return view('categori.add', [
            'data' => $categori,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoriesRequest $request, categories $categories)
    {
        
        $categori->fill($request->all());
        $categori->save();

         return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        $categori->delete();
        return redirect('/categories');
    }
}
