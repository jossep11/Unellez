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
                <table id="basic-datatables1" class="display table table-striped table-hover table-boder-radius serial">
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
                            
                            <td>{{date('d-m-Y', strtotime($item->created_at)) }}</td>

                            <td>
                                <div class="barra___">
                                
                               <form id="prubz" action="{{ route('export.x'), $item->id }}" method="GET">
                                
                                
                               @csrf 
                               <button class="btnz" type="submit" name="boton" value="{{$item->id}}"> <i class="fas fa-arrow-alt-circle-down"></i></button>
                                </form>
                                
                                
                                <form class="form2x" action="{{route ('bandeja_entrada.destroy', $item->id)}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btnz" type="submit" name="boton" value="{{$item->id}}"> <i class="fa fa-times"></i></button>
                                </form>
                            </div>
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

<script>
    
$('.form2x').submit(function(e){
        e.preventDefault();
        swal({
            title: '¿Está seguro que desea borrar este registro?',
            text: "¡No pódras revertir esta acción!",
            type: 'warning',
            buttons:{
                confirm: {
                    text : 'Sí, Borrar',
                    className : 'btn btn-info'
                },
                cancel: {
                    visible: true,
                    text : 'No, cancelar!',
                    className: 'btn btn-danger'
                }
            }
            
        }).then((willDelete) => {
            if (willDelete) {
                swal("Registro borrado", {
                    icon: "success",
                    buttons : {
                        confirm : {
                            visible: false,
                            className: 'btn btn-success'
                        }
                    }
                });
            this.submit();
            } else {
                //nothing happes
            }
        });

    });


</script>

@endsection
