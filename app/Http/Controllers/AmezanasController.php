<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amenazas;

class AmezanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenazas = amenazas::all();
        return view('Evaluacion.Amenaza')->with('amenazas', $amenazas);
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
        $amenazas = new amenazas();
        $amenazas->description=$request->get('description');
        $amenazas->save();
        return redirect('/amenazas');
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
        $amenazas = amenazas::find($id);
        $amenazas->description=$request->get('description');
        $amenazas->save();

        return redirect('/amenazas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenazas = amenazas::find($id);
        $amenazas->delete();
        return redirect('/amenazas');
    }
}
