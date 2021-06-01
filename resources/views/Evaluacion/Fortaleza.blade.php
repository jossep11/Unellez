@extends('Evaluacion.layout_evaluacion')

@section('css')
<link rel="stylesheet" href="/public/css/styles.css">
@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1>Fortalezas</h1>    
            <!-- Button trigger modal -->
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fas fa-plus"> Añadir nuevo</i></a>
            
            </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius">
                    <thead>
                        {{-- insertion of items --}}
                        <tr>
                            <th>Nº item</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    {{-- foot table --}}
                    <tfoot>
                        <tr>
                            <th>Nº item</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>

                    {{--database data subtraction --}}
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Systemdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd ewqeqw eqw eqwe qwe qwe qwe qwe qwe qewqeqw eqw eqwe qwe qwe qwe qwe qwe qewqeqw eqw eqwe qwe qwe qwe qwe qwe qwe Architect</td>
                            <td>Edinburgh</td>

                        </tr>
                   {{-- Data extraction from database --}}
                        @foreach($fortalezas as $fortaleza)
                        <tr>
                            <td> {{$fortaleza->id}}</td>
                            <td> {{$fortaleza->description}}</td>
                
                {{-- example to delete etc
                    <td>
                                <form action="{{route ('articulos.destroy', $articulo->id)}}" method="POST">
                                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                      </td>
               
                --}}
                            
                        </tr>
                
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection