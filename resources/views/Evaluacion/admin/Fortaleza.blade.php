
    <div class="card">
        
        <div class="card-header collapsed card_amenaza_collapse" id="headinfortaleza" data-toggle="collapse" data-target="#collapseFortaleza" aria-expanded="false" aria-controls="collapseFortaleza">
            <div class="span-icon">
                <i class="fas fa-magic"></i>

            </div>
            <div class="span-title">
               Fortalezas
            </div>
            <div class="span-mode"></div>
        </div>


        <div id="collapseFortaleza" class="collapse " aria-labelledby="headinfortaleza" data-parent="#accordion">
            <div class="card-body">
    
                {{-- Header inside of the collapse --}}
                <div class="Header_InsideCollapse">
                    <div class="barra">
                    <h1 id="" class="IdentificadorD">Fortalezas</h1> 
                    <!-- Button trigger modal -->
                    <a href="# " class="btn_agregar_estrategia" data-toggle="modal" data-target="#modalFortalezas"> <i class="fas fa-plus"> Añadir nuevo</i></a>
                    
                    </div>
                </div>
         
            <!-- Modal data insertion  -->
            <div class="modal fade" id="modalFortalezas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Añadir Fortalezas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                    
                            <form class="añadirFortalezas" action="{{route ('fortaleza.store')}}" method="POST">
                                @csrf
                                <p>Fortalezas</p>
                                <div class="campo">
                                  <textarea class="form-control1"  name="description" autofocus minlength="5" required></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">Añadir</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>

                            </form>
                        
                        </div>
                       
                    </div>
                </div>
            </div>


        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-datatables2" class="display table table-striped table-hover table-boder-radius serial">
                    <thead>
                        {{-- insertion of items --}}
                        <tr>
                            <th class="thresponsive">Nº item</th>
                            <th >Descripción</th>
                            <th class="thresponsive">Acciones</th>
                        </tr>
                    </thead>
    
                    {{--database data subtraction --}}
                    <tbody>
                    {{-- Data extraction from database --}}
                    @foreach($fortalezas as $fortaleza)
                        <tr>
                           <td class="nro_item_center" id="tr_">
                              <div id="" class="IndexDAFOFortaleza nro_item circulo"> </div>
                            </td>
                            
                            <td> {{$fortaleza->description}}</td>

                            <td>
                                <form class="eliminar_Fortalezas" action="{{route ('fortaleza.destroy', $fortaleza->id)}}" method="POST">
                            	<div class="form-button-action">    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editFortalezas{{$fortaleza->id}}"><i class="fa fa-edit"></i></a>
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
            <div class="modal fade" id="editFortalezas{{$fortaleza->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Fortalezas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- with amenaza.update I indicate where it's gonna be the change Jp--}}
                        {{-- $amenaza is the reference the item that it's gonna be changed Jp--}}            
                        <form class="FortalezaCambios" action="{{route('fortaleza.update', $fortaleza)}}"  method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            <p>Fortalezas</p>
                            <div class="campo">
                            <textarea class="form-control1" id="message-text" name="description" minlength="5" required>{{$fortaleza->description}}</textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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


    </div>

<script>


//añadido
    $('.añadirFortalezas').on('submit', function(e) {
        e.preventDefault();
                swal({
                    title: "Excelente!",
                    text: "La información se ha actualizado de forma correcta!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Ok",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                           
                        }
                    }
                }).then((redir)=>
                {
                       this.submit();
                });
});

//edit
$('.FortalezaCambios').submit(function(e){
        e.preventDefault();
        swal({ 
            title: "Excelente!",
            text: "La información se ha actualizado de forma correcta!",
            icon: "success",
            buttons: {
                confirm: {
                    text: "Ok",
                    value: true,
                    visible: true,
                    className: "btn btn-success",
                    closeModal: true
                
                }
            }
        }).then((redir)=>
        {
            this.submit();
        });
    });


//eliminar 
$('.eliminar_Fortalezas').submit(function(e){
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

