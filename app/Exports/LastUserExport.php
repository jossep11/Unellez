<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class LastUserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {

        $ultimaOpera= DB::table('operacions')->get();
        $cuenta= count($ultimaOpera);
        
        $data = DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('fortalezas','bandeja__entradas.ID_Fortaleza', '=', 'fortalezas.id')
        ->where('operacions.id', $cuenta)        
        ->get();
        
        $dataAmenaza = DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('amenazas','bandeja__entradas.ID_Amenaza', '=', 'amenazas.id')
        ->where('operacions.id', $cuenta)        
        ->get();

        $dataDebilidades= DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('debilidades','bandeja__entradas.ID_Debilidad', '=', 'debilidades.id')
        ->where('operacions.id', $cuenta)        
        ->get();

        $dataOportunidades= DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('oportunidades','bandeja__entradas.ID_Oportunidades', '=', 'oportunidades.id')
        ->where('operacions.id', $cuenta)        
        ->get();

        $dataUser= DB::table('operacions')
        ->join('users', 'operacions.id_user', '=', 'users.id')
        ->where('operacions.id', $cuenta)        
        ->get(['users.name', 'users.Nombre_Direccion']);



        return view('Evaluacion.ExportExcel.lastoperacion', [//where('id', $this->boton)
            //'Operacion'=> Bandeja_Entrada::all()->join('operacions', )
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
