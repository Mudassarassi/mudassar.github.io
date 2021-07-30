<?php

namespace App\Http\Controllers;

use App\Models\botigas;
use Illuminate\Http\Request;

class BotigasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $botiga = botigas::all();
        return response()->json(compact('botiga'));
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
     * @param  \App\Models\botigas  $botigas
     * @return \Illuminate\Http\Response
     */
    public function show(botigas $botigas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\botigas  $botigas
     * @return \Illuminate\Http\Response
     */
    public function edit(botigas $botigas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\botigas  $botigas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, botigas $botigas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\botigas  $botigas
     * @return \Illuminate\Http\Response
     */
    public function destroy(botigas $botigas)
    {
        //
    }
}
