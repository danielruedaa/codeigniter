<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>


<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-responsive.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-bootstrap.css"/>
<style type="text/css">
/*escritorio*/
  @media(min-width: 1200px){body{color:green;}}
  /*table escritorio pequeño*/
  @media(min-width: 768px)and(max-width: 979px){body{color:green;}}
  /*tablet o smartphone*/
  @media(max-width: 767px){body{color:blue;}}
  /*smartphone*/
  @media(max-width: 480px){body{color:yellow;}}
</style>
<title>post</title>
</head>

<div class="text-center">
<h1>Bienvenido </h1>
</div>

<body>
  <div id="prueba" class="container">
  <?php
   $control = false;
  if (isset($_SESSION['email'])) {
      $ingreso2 = $_SESSION['email'];
      $control = true;
      echo 'Ingreso como '.$ingreso2;
  } else {
      echo 'No hay usuario registrado';
  }
  //echo validation_errors(); // para validar los errores
  echo form_open('post/guardarPost'); // asignar la ruta para mandar los datos por post
  ?>
</div>
<div class="text-center">
  <div id="prueba" class="container">
<table class="table">
<tr>
<td class="text-left"><label>Nombre :</label> </td>
<td><input type="text" name= "nombre"    value= "" placeholder="Daniel Rueda" required="required">       </td>
</tr>
<tr>
<td class="text-left" >Escribe tu post .... </td>
<td><p>.</p>
</tr>
</table>
</div>
</div>
<div id="prueba" class="container">
<textarea name="editor1" id="editor1"></textarea>
<table class="table" >

<ul class="list-inline">
 
 <li><a href = "<?php echo site_url('post/paginationpost'); ?>">ir al post</a></li>
 <li><a href = "<?php echo site_url('post/logout'); ?>">Salir</a></li>
 <li><input type="submit" value="guardar"> </li>


</ul>
    </table>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
</form>
</div>
</body>
</html>
