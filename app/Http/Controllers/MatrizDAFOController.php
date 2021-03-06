<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\debilidades;
use App\Models\Fortaleza;
use App\Models\amenazas;
use App\Models\oportunidades;
use App\Models\EstrategiaFa;


class MatrizDAFOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debilidades =debilidades::all();
        $fortalezas =Fortaleza::all();
        $amenazas = amenazas::all();
        $oportunidades= oportunidades::all();
        $EstrategiaFa = EstrategiaFa::all();

        return view('Evaluacion.UsuariosEv.MatrizDAFO')->with('fortalezas', $fortalezas)
        ->with('debilidades', $debilidades)
        ->with('oportunidades', $oportunidades)
        ->with('amenazas', $amenazas)
        ->with('EstrategiaFa', $EstrategiaFa);       
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
    //  return redirect('/matrizdafo');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
