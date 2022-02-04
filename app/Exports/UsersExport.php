<?php

namespace App\Exports;

use App\Models\Bandeja_Entrada;
use App\Models\Operacion;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{

protected $boton;
function __construct($boton)
{
      $this->boton=$boton;
}

 
    public function view(): View
    {
        $data = DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('fortalezas','bandeja__entradas.ID_Fortaleza', '=', 'fortalezas.id')
        ->where('operacions.id', $this->boton)        
        ->get();//this is of fortaleza i need to do the same but with the others
        //->join('users', 'operacions.id_user', '=', 'users.id')->get(['users.name', 'users.Nombre_Direccion', 'operacions.id', 'operacions.created_at' ]);
        $dataAmenaza = DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('amenazas','bandeja__entradas.ID_Amenaza', '=', 'amenazas.id')
        ->where('operacions.id', $this->boton)        
        ->get();

        $dataDebilidades= DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('debilidades','bandeja__entradas.ID_Debilidad', '=', 'debilidades.id')
        ->where('operacions.id', $this->boton)        
        ->get();

        $dataOportunidades= DB::table('bandeja__entradas')
        ->join('operacions', 'bandeja__entradas.ID_Operacion', '=', 'operacions.id')
        ->join('oportunidades','bandeja__entradas.ID_Oportunidades', '=', 'oportunidades.id')
        ->where('operacions.id', $this->boton)        
        ->get();

        $dataUser= DB::table('operacions')
        ->join('users', 'operacions.id_user', '=', 'users.id')
        ->where('operacions.id', $this->boton)        
        ->get(['users.name', 'users.Nombre_Direccion']);

        return view('Evaluacion.ExportExcel.datosexcel', [//where('id', $this->boton)
            //'Operacion'=> Bandeja_Entrada::all()->join('operacions', )
            'data'=>$data,
            'dataAmenaza'=> $dataAmenaza,
            'dataDebilidades'=> $dataDebilidades,
            'dataOportunidades' => $dataOportunidades,
            'dataUser'=> $dataUser,

        ]);
    
       // return Operacion::where('id',$this->boton)->get();
        
    }
}

