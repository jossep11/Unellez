@extends('Evaluacion.layout_evaluacion')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1 id="" class="IdentificadorIndex">Amenazas</h1>    
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
                        @foreach($amenazas as $amenaza)
                        <tr>
                           <td class="nro_item_center" id="tr_">
                              <div id="" class="nro_item circulo"> </div>
                            </td>
                            
                            <td> {{$amenaza->description}}</td>

                            <td>
                                <form action="{{route ('amenazas.destroy', $amenaza->id)}}" method="POST">
                            	<div class="form-button-action">    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editAmenaza{{$amenaza->id}}"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-link btn-danger" title="Eliminar" type="submit" >
                                    <i class="fa fa-times"></i>
                                </button>
                                
                                </div>
                                </form>
                
                            </td>

            <!-- Modal data insertion  -->
            {{-- to pass it the item that's gonna be changed have to send $amenaza-> --}}
            <div class="modal fade" id="editAmenaza{{$amenaza->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- with amenaza.update I indicate where it's gonna be the change Jp--}}
                        {{-- $amenaza is the reference the item that it's gonna be changed Jp--}}            
                        <form action="{{route('amenazas.update', $amenaza)}}"  method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            <div class="campo">
                            <textarea class="form-control1" id="message-text" name="description" >{{$amenaza->description}}</textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit"{{$amenaza->id}} class="btn btn-primary">Save changes</button>
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