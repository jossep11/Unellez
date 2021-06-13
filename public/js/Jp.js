var item = document.querySelectorAll("#nro_item");
var id = document.querySelector("#IdentificadorIndex").textContent;
var td = document.querySelectorAll("#basic-datatables td");

console.log(td);

/** with the element "item" I call the index element, so then here below
 * I can add the index and with the id and the function charAt(0)I can get the first
 * letter of the text that it's being working --jossep11 (jp)
 */
item.forEach(function (valor, indice, item1) {
    valor.innerHTML = `${id.charAt(0)}${indice + 1}`;
});


		var rutaAbsoluta = self.location.href;   
		var posicionUltimaBarra = rutaAbsoluta.lastIndexOf("/");
		var rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );
		
       

//lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
if(rutaRelativa==='matrizdafo'){
$(document).ready(function() {
    $('table.display').DataTable({
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
        language: {
            search: "Buscar:"
        }
    });

    $('#multi-filter-select').DataTable({
            initComplete: function() {
            this.api().columns().every(function() {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function() {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        }
    });

    // Add Row



})
    td.forEach(element => {
        element.classList.add('MatrizDafoWidth');
    });


}

else{
    $(document).ready(function() {
        $('#basic-datatables').DataTable({              
        
            language: {
                search: "Buscar:"
            }
    
        });
    
    
        $('#multi-filter-select').DataTable({
                initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
    
                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });
    
                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });
    
        // Add Row
    
    
    
    })
}
