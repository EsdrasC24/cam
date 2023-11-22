<?php

namespace App\Http\Controllers;

use App\Models\DaylyBook;
use Illuminate\Http\Request;

class DaylyBookController extends Controller
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
        $dayly = new DaylyBook();
        $dayly->date = $request->date;
        $dayly->description = $request->description;
        $dayly->due = $request->due;
        $dayly->havings = $request->havings;
        $dayly->save();
        
        session()->flash('status', _('Registro agregado exitosamente!.'));
        return redirect()->route('daylybook.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaylyBook $daylyBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaylyBook $daylyBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaylyBook $daylyBook)
    {
        //
        $dayly = $daylyBook;
        $dayly->date = $request->date;
        $dayly->description = $request->description;
        $dayly->due = $request->due;
        $dayly->havings = $request->havings;
        $dayly->save();
        
        session()->flash('status', _('Datos actualizados exitosamente!.'));
        return redirect()->route('daylybook.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaylyBook $daylyBook)
    {
        //
    }
}
