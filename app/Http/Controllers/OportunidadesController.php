<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oportunidades;

class OportunidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oportunidades =oportunidades::all();
        return view('Evaluacion.Oportunidades')->with('oportunidades', $oportunidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Evaluacion.Oportunidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oportunidades = new oportunidades();
        $oportunidades->description=$request->get('description');
        $oportunidades->save();
        return redirect('/oportunidades');
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
        $oportunidades = oportunidades::find($id);
        $oportunidades->description=$request->get('description');
        $oportunidades->save();

        return redirect('/oportunidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oportunidades = oportunidades::find($id);
        $oportunidades->delete();
        return redirect('/oportunidades');
    }
}
