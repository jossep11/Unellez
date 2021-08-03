@extends('Evaluacion.layout_evaluacion')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
       
        <div class="card-header">
            <div class="barra">
            <h1 >Matriz de Análisis</h1>    
        </div>
    </div>

            
            <div class="accordion accordion-secondary">
               
               {{-- cardtag Debilidades--}}

               
    @include('Evaluacion.admin.Debilidades')
               
    @include('Evaluacion.admin.Oportunidades')
 
    @include('Evaluacion.admin.Amenaza')
              
    @include('Evaluacion.admin.Fortaleza')
               

               
                
              

                



            </div>


  
 
    </div>
</div>

@endsection
