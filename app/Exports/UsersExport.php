<?php

namespace App\Exports;

use App\Models\Operacion;
use App\Models\User;
use Illuminate\Contracts\View\View;
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
        return view('Evaluacion.ExportExcel.datosexcel', [
            'Operacion'=> Operacion::where('id', $this->boton)->get(),
        ]);
    
       // return Operacion::where('id',$this->boton)->get();
        
    }
}

