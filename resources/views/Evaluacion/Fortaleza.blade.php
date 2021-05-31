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
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fas fa-plus"> Añadir nuevo</i></a>

            </div>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius">
                    <thead>
                        <tr>
                            <th>Nº item</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nº item</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Systemdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd ewqeqw eqw eqwe qwe qwe qwe qwe qwe qewqeqw eqw eqwe qwe qwe qwe qwe qwe qewqeqw eqw eqwe qwe qwe qwe qwe qwe qwe Architect</td>
                            <td>Edinburgh</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection