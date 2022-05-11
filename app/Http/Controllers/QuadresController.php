<?php

namespace App\Http\Controllers;

use App\Models\quadres;
use App\Models\botigas;

use Illuminate\Http\Request;

class QuadresController extends Controller
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
        $quadre = quadres::all();
        return response()->json(compact('quadre', 'botiga'));
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
        $quadre = quadres::create($request->all());
        return response()->json_decode(compact('quadre'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quadres  $quadres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if($id!=""){
            $botiga = botigas::all();
        $quadre = quadres::where('idBotiga', $id)->get();
        return response()->json(compact('quadre', 'botiga'));

        }else{
            $botiga = botigas::all();
            $quadre = quadres::all();
            return response()->json(compact('quadre', 'botiga'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quadres  $quadres
     * @return \Illuminate\Http\Response
     */
    public function edit(quadres $quadres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quadres  $quadres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quadres $quadres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quadres  $quadres
     * @return \Illuminate\Http\Response
     */
    public function destroy(quadres $quadres)
    {
        //
        $quadres->delete();
        return response()->json(compact('quadre'));
    }
}
