@extends('Evaluacion.layout_evaluacion')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
       
        <div class="card-header">
            <div class="barra">
            <h1 >Bandeja de Entrada</h1>    
       


        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius serial">
                    <thead>
                       
                        <tr>
                            <th class="colun10">Usuario</th>
                            <th >Fecha de recepción</th>
                            <th class="">Acciones</th>
                        </tr>
                    </thead>
    
            
                    <tbody>
                        @foreach ($operacion as $key=> $item)
                        
                        <tr>

                           <td class="colun10">{{$item->name}}-{{$item->Nombre_Direccion}}</td>
                            
                            <td>{{$item->created_at }}</td>

                            <td>
            
                                <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="{{$key+1}}"><i class="fa fa-edit"></i></a>
                            </td>

                       
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

            


  
 
    </div>
</div>

@endsection
