@extends('Evaluacion.layout_evaluacion')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1 id="" class="IdentificadorIndex">Debilidades</h1>    
            <!-- Button trigger modal -->
            <a href="#" data-toggle="modal" data-target="#modal1"> <i class="fas fa-plus"> Añadir nuevo</i></a>
            
            </div>
        </div>

            <!-- Modal data insertion  -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                    
                            <form method="POST">
                                @csrf
                                <div class="campo">
                                  <textarea class="form-control1" id="message-text" name="description" autofocus></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </form>
                        
                        </div>
                       
                    </div>
                </div>
            </div>


        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius serial">
                    <thead>
                        {{-- insertion of items --}}
                        <tr>
                            <th>Nº item</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
    
                    {{--database data subtraction --}}
                    <tbody>
                    {{-- Data extraction from database --}}
                        @foreach($debilidades as $debilidad)
                        <tr>
                           <td class="nro_item_center" id="tr_">
                              <div id="" class="circulo nro_item"> </div>
                            </td>
                            
                            <td> {{$debilidad->description}}</td>
                            <td>
                                <form action="{{route ('debilidades.destroy', $debilidad->id)}}" method="POST">
                            	<div class="form-button-action">    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editDebilidad{{$debilidad->id}}"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-link btn-danger" title="Eliminar" type="submit" >
                                    <i class="fa fa-times"></i>
                                </button>
                                
                                </div>
                                </form>
                
                            </td>

            <!-- Modal data insertion edit  -->
            {{-- to pass it the item that's gonna be changed have to send $debilidad-> --}}
            <div class="modal fade" id="editDebilidad{{$debilidad->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- with debilidad.update I indicate where it's gonna be the change Jp--}}
                        {{-- $debilidad is the reference the item that it's gonna be changed Jp--}}            
                        <form action="{{route('debilidades.update', $debilidad)}}"  method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            <div class="campo">
                            <textarea class="form-control1" id="message-text" name="description" >{{$debilidad->description}}</textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit"{{$debilidad->id}} class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>
                </div>
</div>
</div>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection