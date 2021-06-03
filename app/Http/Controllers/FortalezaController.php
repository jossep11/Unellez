<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fortaleza;

class FortalezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fortalezas =Fortaleza::all();
        return view('Evaluacion.Fortaleza')->with('fortalezas', $fortalezas);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Evaluacion.Fortalezas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Data insertion to the database*/ 
        $fortalezas = new Fortaleza();
        $fortalezas->description=$request->get('description');
        $fortalezas->save();
        return redirect('/fortaleza');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fortaleza = Fortaleza::find($id);
        $fortaleza->description=$request->get('description');
        $fortaleza->save();

        return redirect('/fortaleza');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fortaleza = Fortaleza::find($id);
        $fortaleza->delete();
        return redirect('/fortaleza');
    }
}
