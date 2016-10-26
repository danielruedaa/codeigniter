
 <?php 
include ('phpBaseDatos/Conexion.php');
require_once("zebra.php");

$query = "SELECT * FROM comentarios ORDER BY id ASC";
$res = $con->query($query);
$num_registros = mysqli_num_rows($res);

$resul_x_pagina = 3;

$paginacion = new Zebra_Pagination();
$paginacion->records($num_registros);
$paginacion->records_per_page($resul_x_pagina);

$consulta = 'SELECT * FROM comentarios ORDER BY id ASC LIMIT ' .(($paginacion->get_page() - 1) * $resul_x_pagina). ',' .$resul_x_pagina;
	$result = $con->query($consulta);
$rows = array();
while($row = mysqli_fetch_array($result)){
   $rows[] = array(   	  
       'id' 	=> $row['id'],
   	   'name' 	=> $row['nombre'],
   	   'pos' 	=> $row['pos'],
   	   'fecha' 	=> $row['fecha'],
   	   'hora' 	=> $row['hora'],
   	);		
}


$paginacion->render();
