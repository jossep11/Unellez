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
                <a href="#" class="btn_agregar_estrategia" data-toggle="modal" data-target="#AgregarFa"> <i class="fas fa-plus"> Añadir nuevo</i></a>
                
                </div>
            </div>




            {{-- llamado del modal --}}
                <!-- Modal data insertion  -->
                <div class="modal fade" id="AgregarFa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Estrategia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form id="fainsert" > 
                                    {{ csrf_field() }}

                                   <p> Fortalezas previamente seleccionadas</p>
                                    <a class="btn btn_test " data-toggle="collapse" href="#collapseInsercionData1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span>Fortalezas</span>
                                        <span class="caret"></span>
                                    </a>
                            
                                      <div class="collapse" id="collapseInsercionData1">                                
                                                                                    
                                        <div id="FaFortaleza" class=" ">
                                            <div id="NoSeleccion_FA_Fortaleza">
                                                <p style="text-align: center;">No ha hecho alguna selección aun</p>
                                            </div>
                                        </div>

                            
                                        </div>

                                        <p> Amenazas previamente seleccionadas</p>
                                      <a class="btn btn_test " data-toggle="collapse" href="#collapseInsercionData2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                       
                                        <span>Amenazas</span>
                                         <span class="caret"></span>
                                       </a>
                                            
                                        <div class="collapse" id="collapseInsercionData2" >

                                            
                                            <div id="FAmenaza" class=" ">
                                            <div id="NoSeleccion">
                                                <p style="text-align: center;">No ha hecho alguna selección aun</p>
                                            </div>
                                        </div>

                                        </div>

                                    <div class="campo">
                                        <label for="">ESTRATEGIA</label>
                                      <textarea class="form-control1" id="message-text" name="Fa_Description" placeholder="Ingresar descripción de la estrategia" autofocus required></textarea>
                                    </div>
    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="butsave" >Añadir</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                       
                                    </div>
    
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
            
           {{-- table --}}
           <table id="fa_table" class="display table table-striped table-hover table-boder-radius serial">
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

            </tbody>
        </table>
           
        </div>
    </div>
</div>


{{-- Modal EditFa --}}
<div class="modal fade" id="EditarFa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Estrategia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
        
                <form id="faedit" > 
                    {{ csrf_field() }}

                    <input type="hidden" id="id_edit" >

                    <a class="btn btn_test " data-toggle="collapse" href="#FaEditFortaleza" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span>Fortalezas</span>
                        <span class="caret"></span>
                    </a>
            
                      <div class="collapse" id="FaEditFortaleza">                                
                        <div class="input-group input-group-sm mb-3">
                        {{-- Input --}} <input type="text" class="form-control Estrategia_Input Estrategia_Input_F" aria-label="Small" placeholder="Ingresar las fortalezas. Ej:F1, F2, F3" required id="EditFA_Fortaleza">
                        </div>
                            
                        <div id="EditFaFortaleza" class=" ">
                            <div id="NoSeleccion_FA_Fortaleza">
                                <p style="text-align: center;">No ha hecho alguna selección aun</p>
                            </div>
                        </div>

                    </div>

                      <a class="btn btn_test " data-toggle="collapse" href="#FaEditAmenaza" role="button" aria-expanded="false" aria-controls="collapseExample">
                       
                        <span>Amenazas</span>
                         <span class="caret"></span>
                       </a>
                            
                        <div class="collapse" id="FaEditAmenaza" >
                            
                            <div class="input-group input-group-sm mb-3">
                {{-- Input --}} 
                                <input type="text" class="form-control Estrategia_Input Estrategia_Input_A"  aria-label="Small" placeholder="Ingresar las Amenazas. Ej:A1, A2, A3" required id="EditFA_Amenaza">
                            </div>
                            
                            <div id="EditFAmenaza" class=" ">
                            <div id="NoSeleccionEdit">
                                <p style="text-align: center;">No ha hecho alguna selección aun</p>
                            </div>
                        </div>

                        </div>

                    <div class="campo">
                        <label for="">ESTRATEGIA</label>
                      <textarea class="form-control1" id="edit-message-text" placeholder="Ingresar descripción de la estrategia" autofocus required></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="ButEditFa" >Save changes</button>
                    </div>

                </form>
            
            </div>
           
        </div>
    </div>
</div>

{{-- Data Insertion --}}
<script>

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    
      function allData(){
          $.ajax({
              type:"GET",
              dataType: 'json',
              url: '/AllDataFa',
              success:function(response){
                var data= "";  
                $.each(response, function(key, value) {
                   //console.log(value);
                    data= data+ "<tr id='TableFa"+value.id+"'>"
                    data= data+ "<td class='tr_'> <div class='circulo nro_itemFA'>"+''+"</div></td>"
                    data= data+ "<td>"+value.Fortalezas+', '+value.Amenazas +"</td>"
                    data= data+ "<td class='Colum100'>"+value.Description+"</td>"
                    data= data+ "<td>"
                    data= data+ "<div class='form-button-action'>"
                    data= data+ "<a href='javascript:void(0)' onclick='EditFa("+value.id +")' class='btn btn-link btn-primary' title='Editar' data-toggle='modal' data-target='#EditarFa'><i class='fa fa-edit'></i></a>"
                    data= data+ "<a href='javascript:void(0)' onclick='DeteleFa("+value.id+")' class='btn btn-link btn-danger' title='Eliminar'><i class='fa fa-times'></i></a>"
                    data= data+ "</div>"
                    data= data+ "</td>"
                    data= data+ "</tr>"
                  });
                  $('#fa_table tbody').html(data);
                 
        $(document).ready(function() {
        $('#fa_table').DataTable({
            lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
            "ordering": false,        
        language: {
            search: "Buscar:",

            paginate:{previous:"Anterior", next:"Siguiente" },

            lengthMenu: "Ver _MENU_ registros",

            info: "Mostrando _START_-_END_ de _TOTAL_ registros",

            zeroRecords: "No hay registros encontrados",

            infoEmpty: "",

            infoFiltered:"(Filtrado de _MAX_ registros)",
}, });
 }); 
 
 item_id();
           // console.log(data);
        }
    });
    
}
     allData();
    

     $('#fainsert').on('submit', function(e) {
        e.preventDefault();
       
       
        let FA_Fortaleza = $('.Fortalezacheck_ input[type=checkbox]');
        let FA_Amenaza = $('.Amenazacheck_ input[type=checkbox]');
        let Fa_Description= $('#message-text').val();
       

        var Fa_Amenaza_ = '';    
        var Fa_Fortaleza_='';
        $(FA_Amenaza).each(function(){
            if (this.checked) {
               
                Fa_Amenaza_ += $(this).val().replace(/[a-z]/g, '');
            }
           
        }); 

        $(FA_Fortaleza).each(function(){
            if (this.checked) {
               
                Fa_Fortaleza_ += $(this).val().replace(/[a-z]/g, '');
            }
           
        }); 


          /*  $("#butsave").attr("disabled", "disabled"); */
            $.ajax({
                url:"{{route('add.estrategiafa')}}",
                type: "POST",
                data: {
                    Fa_Fortaleza_: Fa_Fortaleza_.replace(/[,\s]{2}$/, ''),
                  //with the rex a can remover the last coma
                  Fa_Amenaza_: Fa_Amenaza_.replace(/[,\s]{2}$/, ''),
                  Fa_Description: Fa_Description,              
                  
                },
    
                success:function(response){
                    //console.log(response)
                    $('#fainsert')[0].reset();
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
                });
                 $('#fa_table').DataTable().clear().destroy();
                 allData();
},
           
                error:function(error){
                    console.log(error)
                    swal("Debes seleccionar al menos una Fortaleza y una Amenaza!", {
                    icon : "info",
                    buttons: {
                        confirm: {
                            className : 'btn btn-info'
                        }
                    },
                });
                   // alert('data no saved');
            }    
         });
    });



    //edit
    function EditFa(id){
        $.get('/gettingfa/'+id, function(Fa){
        $('#id_edit').val(Fa.id);
        $('#EditFA_Fortaleza').val(Fa.Fortalezas);
        $('#EditFA_Amenaza').val(Fa.Amenazas);
        $('#edit-message-text').val(Fa.Description);
        })
    }


    $("#faedit").on('submit', function(e) {
        e.preventDefault();
        let id = $("#id_edit").val();
        let EditFA_Fortaleza = $('#EditFA_Fortaleza').val();
        let EditFA_Amenaza = $('#EditFA_Amenaza').val();
        let EditFa_Description= $('#edit-message-text').val();
 
        $.ajax({
            url:"{{route('Update.Fa')}}",
            type:"PUT",
            data:{
                id:id,
                EditFA_Fortaleza:EditFA_Fortaleza,
                EditFA_Amenaza:EditFA_Amenaza,
                EditFa_Description:EditFa_Description,  
            },
            success:function(response){
                    $('#TableFa'+ id +' td:nth-child(2)').text(EditFA_Fortaleza + ', ' + EditFA_Amenaza);
                    $('#TableFa'+ id +' td:nth-child(3)').text(EditFa_Description);
                    $('#faedit')[0].reset();
                   
                    alert('data changed');
                },
                error:function(error){
                    console.log(error)
                    alert('data no saved');
                } 

        });

    });



    // delete 
    function DeteleFa(id) {

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
                            visible: true,
                            className: 'btn btn-success'
                        }
                    }
                });
                $.ajax({
                url:'/deleting/'+id, 
                type:'DELETE',
                data:{

                },
                success:function(response){
                    $('#TableFa'+ id +' td:nth-child(2)').text( '-----');
                    $('#TableFa'+ id +' td:nth-child(3)').text('Table deleted');
                    $('#TableFa'+ id +' td:nth-child(4)').text('-----');
                    //alert('To see every change, reload the page')
                },
                error:function(error){
                    console.log(error)
                    //alert('data not deleted');
                } 

            });
            } else {
                //nothing happes
            }
        });


    }

function item_id() {
    let nro_itemFA= document.querySelectorAll('.nro_itemFA');
    nro_itemFA.forEach(function (valor, indice, item1) {
    return valor.innerHTML =`E${indice + 1}`; 
    });
}
    
</script>
