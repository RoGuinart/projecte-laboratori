<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('product/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
/*
        $request->validate([
            'CAS' => 'required',
            'Nom' => 'required',
            'FDS' => 'required'
        ]);
*/

        Product::create($request->all());
        return redirect()->
            route('products.index')->with('success', 'Producte creat amb èxit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product/update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->
            route('products.index')->with('success','Producte actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->
            route('products.index')->with('success','Producte eliminat amb èxit.');
    }
}
