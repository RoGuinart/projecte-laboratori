<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stock = Stock::get();
        return view('stock/index', ['stock' => $stock]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
/*
        $request->validate([
            'CAS' => 'required',
            'Concentració' => 'required',
            'Tipus Conc.' => 'required',
            'Quantitat' => 'required',
            'Data_Entrada' => 'required',
            'Data_Caducitat' => 'required',
        ]);
*/
        Stock::create($request->all());
        return redirect()->
            route('stocks.index')->with('success','Stock creat amb èxit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
        return view('stock/update', ['stock' => $stock]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {
/*
        $request->validate([
            'CAS' => 'required',
            'Concentració' => 'required',
            'Tipus Conc.' => 'required',
            'Quantitat' => 'required',
            'Data' => 'required',
            'Motiu' => 'required'
        ]);
*/
        $stock->update($request->all());
        return redirect()->
            route('stocks.index')->with('success','Consum realitzat amb èxit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->
            route('stocks.index')->with('success','Stocke eliminat de l\'stock.');
    }
}
