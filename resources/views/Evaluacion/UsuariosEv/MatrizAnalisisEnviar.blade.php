@extends('Evaluacion.layout_evaluacion')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
       
      
            <div class="barra">
            <h1 >Matriz de Análisis</h1>    
            <a href="/userreporte_xlsx" class="">  <i class="fas fa-file-pdf">   Generar XLSX </i></a>
            </div>
 
            <form class="enviandoF" action="{{route ('formarmatriz.store')}}" method="POST">
                @csrf
            <div class="accordion accordion-secondary">
               
               {{-- cardtag Debilidades--}}

               
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="span-icon">
                            <i class="fas fa-minus-circle"></i>
                        </div>
                        <div class="span-title">
                           Debilidades
                        </div>
                        <div class="span-mode"></i></div>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                       
                      
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables1" class="display table table-striped table-hover table-boder-radius serial">
                                        <thead>
                                            {{-- insertion of items --}}
                                            <tr>
                                                <th>Nº item</th>
                                                <th>Descripción</th>                                            
                                            </tr>
                                        </thead>
                        
                                        {{--database data subtraction --}}
                                        <tbody>
                                        {{-- Data extraction from database --}}
                                      @foreach ($debilidades as $key=> $debilidad)

                                      <tr>  
                                        <td  id="tr_">
                                            <div class="td_flex">
                                                <input class="check" type="checkbox" name="debilidades[]" value="{{$debilidad->id}}"> 
                                                <div id="" class="IndexFaDebilidades circulo nro_item"></div>
                                            </div>
                                        </td>

                                        <td  class="Colum100"> {{$debilidad->description}}</td>
                                        
                                      </tr>
                                          
                                      @endforeach

                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
                

               {{-- cardtag Oportunidades --}}
                <div class="card">
                    <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="span-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <div class="span-title">
                           Oportunidades
                        </div>
                        <div class="span-mode"></div>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                      
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables2" class="display table table-striped table-hover table-boder-radius serial">
                                        <thead>
                                            {{-- insertion of items --}}
                                            <tr>
                                                <th>Nº item</th>
                                                <th>Descripción</th>                                            
                                            </tr>
                                        </thead>
                        
                                        {{--database data subtraction --}}
                                        <tbody>
                                        {{-- Data extraction from database --}}
                                      @foreach ($oportunidades as $key=> $oportunidad)
                                      <tr>
                                       
                                        <td  id="tr_">
                                        <div class="td_flex">
                                            <input class="check" type="checkbox"  name="oportunidad[]" value="{{$oportunidad->id}}"> 
                                            <div id="" class="IndexDAFOOportunidades circulo nro_item"></div>
                                        </div>
                                        </td>

                                        <td  class="Colum100"> {{$oportunidad->description}}</td>
                                        
                                      </tr>
                                          
                                      @endforeach

                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                       
                    </div>
                </div>

                {{-- cardtag Fortalezas --}}
                <div class="card">
                    <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="span-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <div class="span-title">
                           Fortalezas
                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        
                        <div class="card-body">
                            <table id="basic-datatables3" class="display table table-striped table-hover table-boder-radius serial">
                                <thead>
                                    {{-- insertion of items --}}
                                    <tr>
                                        <th>Nº item</th>
                                        <th>Descripción</th>                                            
                                    </tr>
                                </thead>
                
                                {{--database data subtraction --}}
                                <tbody>
                                {{-- Data extraction from database --}}
                              @foreach ($fortalezas as $key=> $fortaleza)
                              <tr>
                               
                                <td  id="tr_">
                                    <div class="td_flex">
                                        <input class="check CheckboxFortaleza" type="checkbox"  name="fortalezas[]" value="{{$fortaleza->id}}" > 
                                        <div id="" class="IndexDAFOFortaleza nro_item circulo"></div>
                                    </div>
                                </td>

                                <td  class="Colum100"> {{$fortaleza->description}}</td>
                                
                              </tr>
                                  
                              @endforeach

                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                {{-- Amenazas --}}
                
                <div class="card">
                    <div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        <div class="span-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="span-title">
                          Amenazas
                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <table id="basic-datatables4" class="display table table-striped table-hover table-boder-radius serial">
                                <thead>
                                    {{-- insertion of items --}}
                                    <tr>
                                        <th>Nº item</th>
                                        <th>Descripción</th>                                            
                                    </tr>
                                </thead>
                
                                {{--database data subtraction --}}
                                <tbody>
                                {{-- Data extraction from database --}}
                          
                              @foreach ($amenazas as $key=> $amenaza)
                              <tr class="tr_amenaza">
                               
                                <td  id="tr_">
                                    <div class="td_flex">
                                        <input class="check CheckboxAmenaza" type="checkbox"  name="amenazas[]" value="{{$amenaza->id}}"> 
                                        <div id="" class="IndexDAFOAmenaza circulo nro_item"></div>
                                    </div>
                                </td>

                                <td class="Colum100"> {{$amenaza->description}}</td>
                                
                              </tr>
                                  
                              @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
                <button type="submit" class="btn btn-info float-right" >Enviar</button>
        </form>
       
    </div>

 
    </div>
</div>


<script>
$('.enviandoF').submit(function(e) {
   // e.preventDefault();
 
    let  checkbox_amenaza = $('input[name="amenazas[]"]');
    let  checkbox_debilidades = $('input[name="debilidades[]"]');
    let  checkbox_oportunidades = $('input[name="oportunidad[]"]');
    let  checkbox_fortalezas = $('input[name="fortalezas[]"]');

    // si la cantidad de checkboxes "chequeados" es cero,
    // entonces se evita que se envíe el formulario y se
    // muestra una alerta al usuario


    //let x1= e.preventDefault();

    //console.log(checkbox_fortalezas.val());


   //console.log(checkbox_amenaza);



})          

   

</script>

@endsection
