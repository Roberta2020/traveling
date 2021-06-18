<?php

namespace App\Http\Controllers;

use App\Models\Uzklausa;
use Illuminate\Http\Request;

class UzklausaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uzklausas.index', ['uzklausas' => Uzklausa::orderBy('name')->get()]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uzklausa  $uzklausa
     * @return \Illuminate\Http\Response
     */
    public function show(Uzklausa $uzklausa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uzklausa  $uzklausa
     * @return \Illuminate\Http\Response
     */
    public function edit(Uzklausa $uzklausa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uzklausa  $uzklausa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uzklausa $uzklausa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uzklausa  $uzklausa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uzklausa $uzklausa)
    {
        //
    }
}
