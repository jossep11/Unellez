<div class="card">
   
   {{-- Header del colapse --}}
   
    <div class="card-header collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <div class="span-icon">
            <i class="fas fa-chess-knight"></i>
        </div>
        <div class="span-title">
            Estrategias FA
        </div>
        <div class="span-mode"></div>
    </div>

    {{-- Action collapse --}}
    
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
        <div class="card-body">

            {{-- Header inside of the collapse --}}
            <div class="Header_InsideCollapse">
                <div class="barra">
                <h1 id="tablax">Tabla de Estrategias</h1>    
                <!-- Button trigger modal -->
                <a href="#" class="btn_agregar_estrategia" data-toggle="modal" data-target="#modal1"> <i class="fas fa-plus"> Añadir nuevo</i></a>
                
                </div>
            </div>




            {{-- llamado del modal --}}
                <!-- Modal data insertion  -->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Estrategia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                           
                            <div class="modal-body">
                        
                                <form method="post" id="StudenForm"> 
                                @csrf
                                    <a class="btn btn_test " data-toggle="collapse" href="#collapseInsercionData1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Fortalezas</span>
                                        <span class="caret"></span>
                                    </a>
                            
                                      <div class="collapse" id="collapseInsercionData1">                                
                                        <div class="input-group input-group-sm mb-3">
                                        {{-- Input --}} <input type="text" class="form-control Estrategia_Input" name="FA_Fortaleza" aria-label="Small" placeholder="Ingresar las fortalezas. Ej:F1, F2, F3" required>
                                        </div>
                                            
                                        <div id="FaFortaleza" class=" ">
                                            <div id="NoSeleccion_FA_Fortaleza">
                                                <p style="text-align: center;">No ha hecho alguna selección aun</p>
                                            </div>
                                        </div>

                            
                                        </div>


                                      <a class="btn btn_test " data-toggle="collapse" href="#collapseInsercionData2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                       
                                        <span>Amenazas</span>
                                         <span class="caret"></span>
                                       </a>
                                            
                                        <div class="collapse" id="collapseInsercionData2" >
                                            
                                            <div class="input-group input-group-sm mb-3">
                                {{-- Input --}} 
                                                <input type="text" class="form-control Estrategia_Input" name="FA_Amenaza" aria-label="Small" placeholder="Ingresar las Amenazas. Ej:A1, A2, A3" required>
                                            </div>
                                            
                                            <div id="FAmenaza" class=" ">
                                            <div id="NoSeleccion">
                                                <p style="text-align: center;">No ha hecho alguna selección aun</p>
                                            </div>
                                        </div>

                                        </div>

                                    <div class="campo">
                                      <textarea class="form-control1" id="message-text Description" name="Description" placeholder="Ingresar descripción de la estrategia" autofocus required></textarea>
                                    </div>
    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" id="butsave" >Save changes</button>
                                    </div>
    
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
            
            <table id="basic-datatables fa_table" class="display table table-striped table-hover table-boder-radius serial">
                <thead>
                    {{-- insertion of items --}}
                    <tr>
                        <th>Nº ítem</th>
                        <th>Selección</th>
                        <th>Descripción</th>   
                        <th>Acciones</th>                                         
                    </tr>
                </thead>

                {{--database data subtraction --}}
                <tbody>
                {{-- Data extraction from database --}}
              @foreach ($amenazas as $amenaza)
              <tr>
               
                <td id="tr_">
                <div id="nro_item" class="circulo">    </div>
                </td>
               <td>f1, f2, f3, f4</td>
               <td class="Colum100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nihil, iure amet dolore nisi, perspiciatis doloribus repudiandae sunt reprehenderit eveniet, iste nam veniam eius omnis cupiditate officiis ad tenetur aut.</td>
               
                <td>borrar, editar</td>
                
              </tr>
                  
              @endforeach

            
                </tbody>
            </table>
        </div>
    </div>
</div>

