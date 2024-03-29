var usuario = null;
var cols = [];
$('#tabla-usuarios').dataTable({
             "bJQueryUI": true,
             "sPaginationType": "full_numbers",
             "bAutoWidth": false,
             "bRetrieve": true,
             "oLanguage": getOLanguage(),
             "aaSorting": [[ 0, "asc" ]],
             "iDisplayLength": 25,
             "aoColumns": [
             {"sType": "fecha-hora"},
             {"bVisible": false},
             null,
             null,
             null,
             null
             ]

        });
$(function () {
      
    $('body').on('click','.btn-desactivar-usuario',function () {
        usuario = $(this).data('usuario');
        $('#modal-desactivar-usuario').modal('show');
    })
    $('body').on('click','.btn-activar-usuario',function () {
        usuario = $(this).data('usuario');
        $('#modal-activar-usuario').modal('show');
    })

    $('#btn-activar').click(function () {
        if(usuario != null)
            activar();
    })

    $('#btn-desactivar').click(function () {
        if(usuario != null)
            desactivar();
    })
})

function setCols(colums) {
    cols = colums;
}


function activar() {
    var params = {_token:$('#general_token').val(),usuario:usuario};
    var url = $('#general_url').val()+'/usuario/activar';
    abrirBlockUiCargando('Activando ');
    $.post(url,params)
        .done(function (data) {
            if(data.success){
                $('#modal-activar-usuario').modal('hide');
                usuario = null;
                cerrarBlockUiCargando();
                abrirAlerta('alertas-usuario','success',['EL usuario ha sido activado con éxito'],null,'body');
                cargarTablaUsuarios();
            }
        }).fail(function (jqXHR,state,error) {
        $('#modal-activar-usuario').modal('hide');
        usuario = null;
        cerrarBlockUiCargando();
        abrirAlerta('alertas-usuario','danger',JSON.parse(jqXHR.responseText),null,'body');
    })
}

function desactivar() {
    var params = {_token:$('#general_token').val(),usuario:usuario};
    var url = $('#general_url').val()+'/usuario/desactivar';
    abrirBlockUiCargando('Desctivando ');
    $.post(url,params)
        .done(function (data) {
            if(data.success){
                $('#modal-desactivar-usuario').modal('hide');
                usuario = null;
                cerrarBlockUiCargando();
                abrirAlerta('alertas-usuario','success',['El usuario ha sido desactivado con éxito'],null,'body');
                cargarTablaUsuarios();
            }
        }).fail(function (jqXHR,state,error) {
        $('#modal-desactivar-usuario').modal('hide');
        usuario = null;
        cerrarBlockUiCargando();
        abrirAlerta('alertas-usuario','danger',JSON.parse(jqXHR.responseText),null,'body');
    })
}

function cargarTablaUsuarios() {
    var tabla_usuarios = $('#tabla-usuarios').dataTable({ "destroy": true });
    tabla_usuarios.fnDestroy();
    $.fn.dataTable.ext.errMode = 'none';
    $('#tabla-usuarios').on('error.dt', function(e, settings, techNote, message) {
        console.log( 'DATATABLES ERROR: ', message);
    })

    tabla_usuarios = $('#tabla-usuarios').DataTable({
        lenguage: idioma_tablas,
        processing: true,
        serverSide: true,
        ajax: $("#general_url").val()+"/usuario/lista",
        columns: cols,
        fnRowCallback: function (nRow, aData, iDisplayIndex) {
            $(nRow).attr('id','row_'+aData.id);
            setTimeout(function () {
            },300);
        },
    });
}
