$(document).ready(function() {
    if ($('#checkbox').is(':checked')) {
        $('#btn_signup').prop('disabled', false);
    }
})

function check() {
    if ($('#checkbox').is(':checked')) {
        console.log(1234)
        $('#btn_signup').prop('disabled', false);
    }
}