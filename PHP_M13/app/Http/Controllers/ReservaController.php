<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("reserva");
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
       $request->validate([
            'name' => 'required|max:255',
            /*'dateIN' => 'required',
            'dateOut' => 'required'*/
        ]);
        //
        $reserva = new reserva;
        $reserva->nombre = $request->name;
        $reserva->fechaInicio = date("Y-m-d", strtotime($request->dateIN));
        $reserva->fechaFinal = date("Y-m-d", strtotime($request->dateOUT));
        $reserva->hotel = "1";
        $reserva->precio = "120";
        $reserva->user_id = Auth::user()->id;
        $reserva->save();
        return view("dashboard");//redirect()->route('reservas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rsrv = reserva::where('user_id', 1)->get();
        return view("mireserva", compact("rsrv"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(reserva $reserva)
    {
        //
        return view('edit',compact('reserva'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reserva $reserva)
    {
        //
        $reserva->update($request->all());

        return redirect()->route('mireserva.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(reserva $reserva)
    {
        //
    }
}
