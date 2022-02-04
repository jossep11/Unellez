<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class LastUserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {

        $userid= Auth::user()->id;
        $ultimaOpera= DB::table('operacions')->where('id_user', $userid)->latest()->first();
        //dd($ultimaOpera);
       // $cuenta= count($ultimaOpera);
        //dd($ultimaOpera);
       
        foreach ($ultimaOpera as $key => $value) {
       //this is the error the last one has aanother number
        
        $data = DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('fortalezas','bandeja__entradas.ID_Fortaleza', '=', 'fortalezas.id')
        ->where('operacions.id', $value)        
        ->get();
        
        $dataAmenaza = DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('amenazas','bandeja__entradas.ID_Amenaza', '=', 'amenazas.id')
        ->where('operacions.id', $value)        
        ->get();

        $dataDebilidades= DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('debilidades','bandeja__entradas.ID_Debilidad', '=', 'debilidades.id')
        ->where('operacions.id', $value)        
        ->get();

        $dataOportunidades= DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('oportunidades','bandeja__entradas.ID_Oportunidades', '=', 'oportunidades.id')
        ->where('operacions.id', $value)        
        ->get();

        $dataUser= DB::table('operacions')
        ->join('users', 'operacions.id_user', '=', 'users.id')
        ->where('operacions.id', $value)        
        ->get(['users.name', 'users.Nombre_Direccion']);



        return view('Evaluacion.ExportExcel.lastoperacion', [//where('id', $this->boton)
            // 'Operacion'=> Bandeja_Entrada::all()->join('operacions', )
            'data'=> $data,
            'ultimaOpera'=>$ultimaOpera,
            'dataAmenaza'=> $dataAmenaza,
            'dataDebilidades'=> $dataDebilidades,
            'dataOportunidades' => $dataOportunidades,
            'dataUser'=> $dataUser,

        ]);
  
       // return Operacion::where('id',$this->boton)->get();
        
        } 
    }
}
