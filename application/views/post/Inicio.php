<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
/*escritorio*/
  @media(min-width: 1200px){body{color:green;}}
  /*table escritorio pequeño*/
  @media(min-width: 768px)and(max-width: 979px){body{color:green;}}
  /*tablet o smartphone*/
  @media(max-width: 767px){body{color:blue;}}
  /*smartphone*/
  @media(max-width: 480px){body{color:yellow;}}

@media (max-width: 500px) {


/*#general{margin:auto; margin-top:5px;width:200px; height:200px;  background:#0CF}*/
.general{position:absolute;width: 200px;height: 200px;left: 100px;top: } */
}

</style>
<title>Inicio </title>

</head>

<div class="text-center">
<h1>Bienvenido </h1>
</div>
<title>inicio</title>

<body>

<?php
  //echo validation_errors(); // para validar los errores
  echo form_open('post/session'); // asignar la ruta para mandar los datos por post
  ?>

<div class="container">
  <?php $control = false;
  if (isset($_SESSION['email'])) {
      $ingreso2 = $_SESSION['email'];
      $control = true;
      echo 'Ingreso como '.$ingreso2;
  } else {
      echo 'No hay usuario registrado';
  }
  ?>
<div class="text-center">
<h2>login</h2>
<table id="prueba" class="table">

<tr>
<td class="text-center">email: </td>
<td class="text-center"><input type="text" name= "email"  value= "" placeholder="carlos@hotmail.com" required="required"> </td>  <!--   -->
</tr>
<td class="text-center">clave:</td>
<td class="text-center">   <input type="password" name= "Password"  value= "" placeholder="*********" required="required" >	 </td> <!--   -->
</tr>
<td class="text-center">
<a href="<?php echo site_url('post/crear'); ?>"><samll>Registrarse</samll> </a>

</td>  <!-- poner un boton de enviar   -->
<td class="text-center">
<input type="submit" value="Ingresar  ">
<?php

echo form_close();
echo validation_errors();
?>
<h2><?php if (isset($mensaje)) {
    echo $mensaje;
} ?></h2>
<!-- avizo de error en los datos-->
<h4><?php if (isset($error)) {
    echo $error;
} ?></h4>
<h4><?php if (isset($errorConsulta)) {
    echo $errorConsulta;
} ?></h4>
 </div>
</form>

</table>
</div>
</div>
</div>
</div>

</body>
</html>
