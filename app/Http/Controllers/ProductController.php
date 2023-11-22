<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->category_id = $request->category;
        $product->user_id = Auth::user()->id;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        session()->flash('status', _('Producto creado exitosamente!.'));
        return redirect()->route('product.create');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->category_id = $request->category;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        session()->flash('status', _('Datos actualizados exitosamente!.'));
        return redirect()->route('product.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
