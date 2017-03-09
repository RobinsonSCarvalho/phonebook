var sociais_files = {};

sociais_files.tiposObrigatorios = function () {
    $('#page-content').find('#tipo').change(function (e) {
        sociais_files._loadCampos($(this).val());
    });
}
sociais_files._loadCampos = function (val) {
    if (val > 0) {
        $('#page-content #file-2').closest('form').find('div.listFileUpload').closest('div.form-group').hide();
        $('#page-content #file-3').closest('div.form-group').hide();
        if (val == 2) {
            $('#page-content #file-2').closest('form').find('div.listFileUpload').closest('div.form-group').show();
        }
        if (val == 3) {
            $('#page-content #file-3').closest('div.form-group').show();
        }
    }
}

$(document).ready(function () {
    sociais_files._loadCampos($('#page-content').find('#tipo').val());
    sociais_files.tiposObrigatorios();
});