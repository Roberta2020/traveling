<?php

namespace App\Http\Controllers;

use App\Models\Paperform;
use Illuminate\Http\Request;

class PaperformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paperform.index');
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
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function show(Paperform $paperform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function edit(Paperform $paperform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paperform $paperform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paperform  $paperform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paperform $paperform)
    {
        //
    }

    public function form(Paperform $paperform){
        return view('paperform.form');
    }
}
