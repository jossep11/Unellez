<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstrategiaFa;

class EstrategiaFAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EstrategiaFa = EstrategiaFa::all();
        return view('Evaluacion.UsuariosEv.MatrizDAFO')->with('EstrategiaFa', $EstrategiaFa);
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
       


        $EstrategiaFa = new EstrategiaFa();
        $EstrategiaFa->Fortalezas=$request->Fa_Fortaleza_;
        
        $EstrategiaFa->Amenazas=$request->Fa_Amenaza_;
        $EstrategiaFa->Description=$request->Fa_Description;
        $EstrategiaFa->save();
        return response()->json($EstrategiaFa);

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
    public function update(Request $request)
    {
       
        $EstrategiaFa = EstrategiaFa::find($request->id);
        $EstrategiaFa->Fortalezas=$request->EditFA_Fortaleza;
        $EstrategiaFa->Amenazas=$request->EditFA_Amenaza;
        $EstrategiaFa->Description=$request->EditFa_Description;
        $EstrategiaFa->save();
        return response()->json($EstrategiaFa);
    }

    public function getEditFaByID($id){
        $EstrategiaFa = EstrategiaFa::find($id);
        return response()->json($EstrategiaFa);
    }

    public function AllDataFa(){
        $data = EstrategiaFa::orderBy('id')->get();
        return response()->json($data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EstrategiaFa = EstrategiaFa::find($id);
        $EstrategiaFa->delete();
        return response()->json(['success'=>'Delete']);
    }

    public function addDataJson(Request $request){
        $data= EstrategiaFa::insert([
            'Fortalezas'=>$request->FA_Fortaleza,
            'Amenazas'=>$request->FA_Amenaza,
            'Description'=>$request->Fa_Description,

        ]);
        return response()->json($data);
    }
    
}
