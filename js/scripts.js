$(document).ready(function() {


$('#bt-login').click(function () {
    window.location = 'bin_login.php';
});

// Modal editar producto
$('.editar_click').click(function(e) {
    e.preventDefault();
    var id = $(this).attr("value");
    // console.log(id);
    $('.body-editar').html(id);
});

$('#foo_registro').submit(function(e) {
    e.preventDefault();
    
    var data = $(this).serialize();
    // var data = new FormData (this);
    console.log(data);
});

})