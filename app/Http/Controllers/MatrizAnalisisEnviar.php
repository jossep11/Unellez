<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amenazas;
use App\Models\Bandeja_Entrada;
use App\Models\debilidades;
use App\Models\Fortaleza;
use App\Models\Operacion;
use App\Models\oportunidades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MatrizAnalisisEnviar extends Controller
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


        return view('Evaluacion.UsuariosEv.MatrizAnalisisEnviar')->with('fortalezas', $fortalezas)
        ->with('debilidades', $debilidades)
        ->with('oportunidades', $oportunidades)
        ->with('amenazas', $amenazas);
        
  
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
        $iduser=Auth::user()->id;

      
        $User_lastop = Operacion::all();
     
    $debilidades=$request->input('debilidades');
    $debilidadesArray=array();

    $oportunidades=$request->input('oportunidad');
    $oportunidadesArray=array();
    
  
 
    $fortalezas=$request->input('fortalezas');
    $fortalezasArray=array();

    $amenazas=$request->input('amenazas');
    $amenazasArray=array();
    if(empty($debilidades) or empty($oportunidades) or empty($fortalezas) or empty($amenazas)){
        echo '<script type="text/javascript"> alert ("Debe seleccionar una de cada una para poder enviar la información!"); window.history.back()</script>';
        return;
    }
    

    $Operacion=new Operacion();
    $Operacion->id_user=Auth::user()->id;
    $Operacion->save();
    
    //echo $Operacion->id;

        foreach ($debilidades as $key => $itemx) {
        $B_Entrada = new Bandeja_Entrada();
        $Debilidad_selected= $debilidadesArray[]=$itemx;
        $B_Entrada->ID_Operacion=$Operacion->id;
        $B_Entrada->ID_Debilidad=$itemx;
        $B_Entrada->save();    

        // $Operacion->id_user=$x;
       //}
      
    }
    
    

    foreach ($oportunidades as $key => $itemO) {
        $B_Entrada = new Bandeja_Entrada();
        $Oportunidades_selected= $oportunidadesArray[]=$itemO;
        $B_Entrada->ID_Operacion=$Operacion->id;
        $B_Entrada->ID_Oportunidades=$itemO;
        $B_Entrada->save();    

        // $Operacion->id_user=$x;
       //}
      }


    

    foreach ($fortalezas as $key => $itemF) {
        $B_Entrada = new Bandeja_Entrada();
        $fortalezas_selected= $fortalezasArray[]=$itemF;
        $B_Entrada->ID_Operacion=$Operacion->id;
        $B_Entrada->ID_Fortaleza=$itemF;
        $B_Entrada->save();    

        // $Operacion->id_user=$x;
       //}
      }
      
      foreach ($amenazas as $key => $itemA) {
        $B_Entrada = new Bandeja_Entrada();
        $amenazas_selected= $amenazasArray[]=$itemA;
        $B_Entrada->ID_Operacion=$Operacion->id;
        $B_Entrada->ID_Amenaza=$itemA;
        $B_Entrada->save();    

        // $Operacion->id_user=$x;
       //}
      }
//$x=4;
     // echo $ID_Opera_Same = DB::table('bandeja__entradas')->select('ID_Fortaleza')->where('ID_Operacion', $x)->get();
     $operacion = DB::table('operacions')
     ->join('users', 'operacions.id_user', '=', 'users.id')->get();
    // echo $operacion;

     return redirect('/formarmatriz');
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
        //
    }
}
