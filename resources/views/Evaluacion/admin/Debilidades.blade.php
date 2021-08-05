
    <div class="card">
        
        <div class="card-header collapsed card_amenaza_collapse" id="headinamenazatwo" data-toggle="collapse" data-target="#collapseDeb" aria-expanded="false" aria-controls="collapseDeb">
            <div class="span-icon">
                <i class="fas fa-minus-circle"></i>

            </div>
            <div class="span-title">
               Debilidades
            </div>
            <div class="span-mode"></div>
        </div>


        <div id="collapseDeb" class="collapse " aria-labelledby="headinamenazatwo" data-parent="#accordion">
            <div class="card-body">
    
                {{-- Header inside of the collapse --}}
                <div class="Header_InsideCollapse">
                    <div class="barra">
                    <h1 id="" class="IdentificadorD">Debilidades</h1> 
                    <!-- Button trigger modal -->
                    <a href="# " class="btn_agregar_estrategia" data-toggle="modal" data-target="#modalDebilidades"> <i class="fas fa-plus"> Añadir nuevo</i></a>
                    
                    </div>
                </div>
         
            <!-- Modal data insertion  -->
            <div class="modal fade" id="modalDebilidades" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Añadir Debilidades</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                    
                            <form class="añadirDebilidades" action="{{route ('debilidades.store')}}" method="POST">
                                @csrf
                                <p>Debilidades</p>
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
                <table id="basic-datatables3" class="display table table-striped table-hover table-boder-radius serial">
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
                    @foreach($debilidades as $debilidad)
                        <tr>
                           <td class="nro_item_center" id="tr_">
                              <div id="" class="IndexFaDebilidades nro_item circulo"> </div>
                            </td>
                            
                            <td> {{$debilidad->description}}</td>

                            <td>
                                <form class="eliminar_Debilidades" action="{{route ('debilidades.destroy', $debilidad->id)}}" method="POST">
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

            <!-- Modal update  -->
            {{-- to pass it the item that's gonna be changed have to send $amenaza-> --}}
            <div class="modal fade" id="editDebilidad{{$debilidad->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Debilidades</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- with amenaza.update I indicate where it's gonna be the change Jp--}}
                        {{-- $amenaza is the reference the item that it's gonna be changed Jp--}}            
                        <form class="DebilidadCambios" action="{{route('debilidades.update', $debilidad)}}"  method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            <p>Debilidad</p>
                            <div class="campo">
                            <textarea class="form-control1" id="message-text" name="description" minlength="5" required>{{$debilidad->description}}</textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="submit"{{$debilidad->id}} class="btn btn-info">Guardar Cambios</button>
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
    $('.añadirDebilidades').on('submit', function(e) {
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
$('.DebilidadCambios').submit(function(e){
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
$('.eliminar_Debilidades').submit(function(e){
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

