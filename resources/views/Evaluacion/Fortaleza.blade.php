@extends('Evaluacion.layout_evaluacion')

@section('css')
<link rel="stylesheet" href="/public/css/styles.css">
@endsection

@section('contenido')

<div class="col-md-12">


    <h1>Fortaleza</h1>



    <div class="card">


        <form action="">

            <div class="block">

                <div class="textarea">
                    <textarea name="" id="" placeholder="Agregar fortaleza"></textarea>
                </div>

                <div class="botones">
                    <a href="" class="btn1">Limpiar</a>
                    <button type="submit" class="btn1">Agregar</button>
                </div>
            </div>
        </form>

        <div class="card-header">

            <h4 class="card-title">Basic</h4>




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
                            <td>System Architect</td>
                            <td>Edinburgh</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection