$(document).ready(function() {


$('#bt-login').click(function () {
    window.location = 'bin_login.php';
});

$('.editar_click').click(function(e) {
    e.preventDefault();
    var id = $(this).attr("value");
    // console.log(id);
    $('.body-editar').html(id);
});

})