<?php

namespace App\Http\Controllers;

use App\Exports\LastUserExport;
use App\Exports\UsersExport;
use App\Models\Bandeja_Entrada;
use App\Models\Operacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BandejaEntrada extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $operacion = DB::table('operacions')
        ->join('users', 'operacions.id_user', '=', 'users.id')->get(['users.name', 'users.Nombre_Direccion', 'operacions.id', 'operacions.created_at' ]);
                                                                                                                                        

       return view('Evaluacion.admin.BandejaEntrada')->with('operacion', $operacion);
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
        //
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
  
    $eliminarOperacion= Operacion::find($id);
    $eliminarOperacion->delete();
    //$eliminarfromBandejaEntrada = Bandeja_Entrada::find($id);
    $eliminarfromBandejaEntrada = DB::table('bandeja__entradas')->where('ID_Operacion', $id)->delete();
    return redirect('/bandeja_entrada');
    }


      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function export(request $request)  
    {   
        $boton= $request->get('boton');
       // dd($this->$boton);
       //return Excel::download(new UsersExport, 'POA.xlsx');
        return Excel::download(new UsersExport($boton), 'Evaluacion.xlsx');
    }

    public function exportLastOne(request $request)  
    {   
       // $boton= $request->get('boton');
       // dd($this->$boton);
       //return Excel::download(new UsersExport, 'POA.xlsx');
        //return Excel::download(new UsersExport($boton), 'Evaluacion.xlsx');
        return Excel::download(new LastUserExport, 'UsuarioEvaluacion.xlsx');
    }
    

}
