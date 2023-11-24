var asu_id = $('#usu_idx').val();

function init(){
    $("#socialMedia_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new Formdata($('#socialMedia_form')[0]);

    $.ajax({
        url: "/Proyecto/controller/Social_media.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(data){
            console.log(data);
            $('#socialMedia_data').DataTable().ajax.reload();
            $('#modalcrearRedes').modal('hide');

            Swal.fire({
                tittle: 'Correcto!',
                text: 'Se registro correctamente',
                icon: 'Success',
                confirmButtonText: 'Aceptar'
            })

        }
    });
}

$(document).ready(function(){

    $('#socialMedia_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml%',
            'csvHtml5',
        ],
        "ajax":{
            url:"/Proyecto/controller/Social_media.php?op_listar",
            type:"post"
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 15,
        "order": [[ 0, "desc" ]],
        "language":{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar MENU registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del START al END de un total de TOTAL registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de MAX registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }

        },
    }) 
});

function nuevo(){
    $('#titulo_modal').html('Nueva Red Social');
    //$('#socialMedia_form')[0].reset();
    $('#modalCrearRedes').modal('show');
}


function editar(socmed_id){
    $.post("/Proyecto/controller/Social_media.php?op=mostrar",{socmed_id:socmed_id}, function (data){
        data = JSON.parse(data);
        //console.log(data);
        $('#socmed_id').val(data.socmed_id);
        $('#socmed_icono').val(data.socmed_icono);
        $('#socmed_url').val(data.socmed_url);
    });
    $('#titulo_modal').html('Editar Red');
    $('#modalCrearRedes').modal('show')
}

function eliminar(social_id){
    Swal.fire({
        tittle: 'Eliminar!',
        text: 'Desea eliminar el registro?',
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/Proyecto/controller/Social_media.php?op=eliminar", {socmed_id:socmed_id}, function(data){
                $('#socialMedia_data').Datatable().ajax.reload();
                Swal.fire({
                    tittle: 'Correcto!',
                    text: 'Se elimino correctamente',
                    icon: 'Succes',
                    confirmButtonText: 'Aceotar'
                })
            });
        }
    });
}