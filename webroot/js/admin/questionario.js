var questionario = {};
questionario.requiredPresence = function () {
    $('#page-content').find('#tipo').change(function (e) {
        e.preventDefault();
        $('#page-content #opcoes').removeAttr('required');
        $('#page-content #opcoes').closest('div.form-group').removeClass('required');
        var value = $(this).val();
        if (value != '' && value != 'text' && value != 'textarea') {
            $('#page-content #opcoes').attr('required', 'required');
            $('#page-content #opcoes').closest('div.form-group').addClass('required');
        }
    });
}

$(document).ready(function () {
    questionario.requiredPresence();
});