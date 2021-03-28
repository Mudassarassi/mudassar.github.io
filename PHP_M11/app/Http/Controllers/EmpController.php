<?php

namespace App\Http\Controllers;

use App\Models\emp;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

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

        return View('emp.index', compact('emp'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('emp.create');
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
        $emp->name = $request->input('name');
        $emp->email = $request->input('email');
        $emp->adress = $request->input('adress');
        $emp->job = $request->input('job');
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
       // dd($id);
       //  $emp =emp::find($id);
        dd($emp);
       if($emp == null){
           return view('error404');
       };

        return View('emp.edit', compact('emp'));
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
        $emp->name = $request->input('name');
        $emp->email = $request->input('email');
        $emp->adress = $request->input('adress');
        $emp->job = $request->input('job');
        $emp->save();

        return Redirect()->route('emp.index');

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
    public function search(request $request){
        $job = $request->input('search');
        $emp = emp::where('job','like','%'.$job.'%')->get();
      //  dd($emp);

        return View('emp.index', compact('emp'));

    }

}
