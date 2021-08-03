<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fortaleza;
use App\Models\amenazas;

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
        return view('Evaluacion.admin.Fortaleza')->with('fortalezas', $fortalezas);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

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
        //$id_descripcion= amenazas::where('id', 1)->get();

        //$id_descripcion= amenazas::where('id', 1)->get('description');
        //$id_descripcion= amenazas::where('id', 1)->first();
        
       // $id_descripcion= amenazas::All();
        
        
        $fortalezas = new Fortaleza();

        $fortalezas->description=$request->get('description');
        $fortalezas->save();
        return redirect('/matriz_analisis_admin');
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

        return redirect('/matriz_analisis_admin');

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
        return redirect('/matriz_analisis_admin');
    }
}
