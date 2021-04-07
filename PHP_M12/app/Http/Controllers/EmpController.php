<?php

namespace App\Http\Controllers;

use App\Models\emp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emp = emp::all();

        return view('emp.index', compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('emp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'adress' => 'required|max:255',
            'job' => 'required|max:255',
        ]);
        //
        $emp = new emp;
        $emp->name = $request->name;
        $emp->email = $request->name;
        $emp->job = $request->name;
        $emp->adress = $request->name;
        $emp->save();
        return redirect()->route('emp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function show(emp $emp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function edit(emp $emp)
    {
        //

       /* $user=Auth::user();
    if($user->esAdmin()){

        return view('emp.edit', compact('emp'));
    }
    else{
    return view('welcome');

       // $emp = emp::$emp;
       echo "Solo Administrador puede editar eso";
    }*/
    return view('emp.edit', compact('emp'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emp $emp)
    {
        //
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->job = $request->job;
        $emp->adress = $request->adress;
        $emp->save();
        return redirect()->route('emp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function destroy(emp $emp)
    {
        //
        $emp->delete();
        return redirect()->route('emp.index');


    }
}
