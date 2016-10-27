addEventListener('load', inicializarEventos, false);

function bienvenida() {
    alert("Ingreso satisfactoriamente")
}



function msgb() {
    var b = confirm("Deseas borrar este registro?");
    if (b == true) {

        alert("borro registro");
        alert($buttonDelete['value']);

        //document.location.href = "send_editar?id=<?php echo $value['id'] ?>";

    } else {

    }
}


function msge() {
    var e = confirm("Deseas editar este registro?");
    if (e == true) {
        //  document.location.href = "send_editar.php?id=<?php echo $value['id'] ?>";

    } else {
        //document.location.href="Pp.php";
    }
}
