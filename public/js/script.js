$(function(){
    $("#init-championship").on('click', function(){
        $('#form-new-championship')[0].reset();
        $(".field-text-error").empty();
        $("#modal-new-championship").modal("show");
    });

    $("#view-championship").on('click', function(){
        $("#modal-view-championship").modal("show");
    });

    $("#simulate").on('click', function(){
        let form = '#form-new-championship';
        if(validate(form)){
            $(form).submit();
        }

    });

    $("#table-view-championship").DataTable({
        "bJQueryUI": true,
        "oLanguage": {
            "sProcessing":   "Processando...",
            "sLengthMenu":   "Mostrar _MENU_ registros",
            "sZeroRecords":  "Não foram encontrados resultados",
            "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "",
            "sInfoPostFix":  "",
            "sSearch":       "Buscar:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Primeiro",
                "sPrevious": "Anterior",
                "sNext":     "Seguinte",
                "sLast":     "Último"
            }
        }
    });
});
// Validate
function validate(form) { 

    isValid = true;

    var curStep = $(form).closest(form),
        curInputs = curStep.find("input:required, select:required, textarea:required");       

    for (var i = 0; i < curInputs.length; i++) {
        if (! curInputs[i].validity.valid || (curInputs[i].value == '')) {
            isValid = false;
            $(".field-text-error").text('O preenchimento de todos os times é obrigatório');
        }
    }
    return isValid;
}
