$(document).ready(function() {
    $('._editar').click(function() {
        var e = confirm("Deseas editar este registro?");
        if (e == true) {
            // por el url del post se pasa el dato

        } else {
            //document.location.href="Pp.php";
        }
    });
});

$(document).ready(function() {
    $('._borrar').click(function() {
        var b = confirm("Deseas borrar este registro?");
        if (b == true) {
            // por el url del post se pasa el dato

        } else {
            //document.location.href="Pp.php";
        }
    });
});
