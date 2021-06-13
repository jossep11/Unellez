@extends('Evaluacion.layout_evaluacion')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1 id="IdentificadorIndex">MatrizDAFO</h1>    

            <a href="#" class="btn_general_pdf"> <i class="fas fa-file-pdf">   Generar PDF </i></a>
            
            </div>
            
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius serial">
                                        <thead>
                                            {{-- insertion of items --}}
                                            <tr>
                                                <th>Nº item</th>
                                                <th>Descripcion</th>                                            
                                            </tr>
                                        </thead>
                        
                                        {{--database data subtraction --}}
                                        <tbody>
                                        {{-- Data extraction from database --}}
                                      @foreach ($debilidades as $debilidad)
                                      <tr>
                                       
                                        <td class="td_flex" id="tr_">
                                        
                                        <input class="check" type="checkbox"> 
                                        <div id="nro_item" class="circulo">    </div>
                                        </td>

                                        <td> {{$debilidad->description}}</td>
                                        
                                      </tr>
                                          
                                      @endforeach

                                    
                                        </tbody>
                                    </table>
                                </div>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius serial">
                                        <thead>
                                            {{-- insertion of items --}}
                                            <tr>
                                                <th>Nº item</th>
                                                <th>Descripcion</th>                                            
                                            </tr>
                                        </thead>
                        
                                        {{--database data subtraction --}}
                                        <tbody>
                                        {{-- Data extraction from database --}}
                                      @foreach ($oportunidades as $oportunidad)
                                      <tr>
                                       
                                        <td class="td_flex" id="tr_">
                                        
                                        <input class="check" type="checkbox"> 
                                        <div id="nro_item" class="circulo">    </div>
                                        </td>

                                        <td> {{$oportunidad->description}}</td>
                                        
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
                            <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius serial">
                                <thead>
                                    {{-- insertion of items --}}
                                    <tr>
                                        <th>Nº item</th>
                                        <th>Descripcion</th>                                            
                                    </tr>
                                </thead>
                
                                {{--database data subtraction --}}
                                <tbody>
                                {{-- Data extraction from database --}}
                              @foreach ($fortalezas as $fortaleza)
                              <tr>
                               
                                <td class="td_flex" id="tr_">
                                
                                <input class="check" type="checkbox"> 
                                <div id="nro_item" class="circulo">    </div>
                                </td>

                                <td> {{$fortaleza->description}}</td>
                                
                              </tr>
                                  
                              @endforeach

                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                            <table id="basic-datatables" class="display table table-striped table-hover table-boder-radius serial">
                                <thead>
                                    {{-- insertion of items --}}
                                    <tr>
                                        <th>Nº item</th>
                                        <th>Descripcion</th>                                            
                                    </tr>
                                </thead>
                
                                {{--database data subtraction --}}
                                <tbody>
                                {{-- Data extraction from database --}}
                              @foreach ($amenazas as $amenaza)
                              <tr>
                               
                                <td class="td_flex" id="tr_">
                                
                                <input class="check" type="checkbox"> 
                                <div id="nro_item" class="circulo">    </div>
                                </td>

                                <td> {{$amenaza->description}}</td>
                                
                              </tr>
                                  
                              @endforeach

                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        <div class="span-icon">
                            <i class="fas fa-chess-knight"></i>
                        </div>
                        <div class="span-title">
                          Estrategia FA
                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                        <div class="span-icon">
                            <i class="fas fa-chess-rook"></i>

                        </div>
                        <div class="span-title">
                         Estrategias DA
                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                        <div class="span-icon">
                            <i class="fas fa-chess-bishop"></i>
                        </div>
                        <div class="span-title">
                        Estrategias FO

                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header collapsed" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                        <div class="span-icon">
                            <i class="fas fa-chess-pawn"></i>
                        </div>
                        <div class="span-title">
                        Estrategias DO
                        </div>
                        <div class="span-mode"></div>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                



            </div>


        </div>

 
    </div>
</div>

@endsection
