addEventListener('load',inicializarEventos,false);

function bienvenida(){
  alert("Ingreso satisfactoriamente")
}

function msgb(){
var b=confirm("Deseas borrar este registro?");
if (b == true) {
//   document.location.href="phpBaseDatos/borrar.php?id=<?php echo $value['id'] ?>";
   alert(" registro Borrado  ");
} else {
  // document.location.href="Pp.php";
    }
}
function msge(){
var e=confirm("Deseas editar este registro?");
if (e == true) {
    //document.location.href="phpBaseDatos/editar.php?id=<?php echo $value['id'] ?>";
  //  document.location.href="Ppeditar.php?id=<?php echo $value['id'] ?>";

} else {
 //document.location.href="Pp.php";
  }
}
