addEventListener('load', inicializarEventos, false);

function bienvenida() {
    alert("Ingreso satisfactoriamente")
}



function msgb() {
    var b = confirm("Deseas borrar este registro?");
    if (b == true) {
        //   document.location.href="phpBaseDatos/borrar.php?id=<?php echo $value['id'] ?>";

        alert(" registro Borrado  ");
    } else {

    }
}


function msge() {
    var e = confirm("Deseas editar este registro?");
    if (e == true) {
        //document.location.href = "send_editar.php?id=<?php echo $value['id'] ?>";
        //var pagina = "http://10.0.0.59/codeigniter/index.php/post/send_editar;"
        var pagina = "http://10.0.0.59/codeigniter/index.php/post;"
        var id = 1;
        //$.post(pagina, id, funcion(datos, estado, xhr), tipoDato)
        $.post(pagina, id)
        console.log("entro");
    } else {
        //document.location.href="Pp.php";
    }
}
