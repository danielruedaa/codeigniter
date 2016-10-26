<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
  @media(min-width: 768px)and(max-width: 979px){body{color:rgb(35, 12, 129);}}
  /*tablet o smartphone*/
  @media(max-width: 767px){body{color:blue;}}
  /*smartphone*/
  @media(max-width: 480px){body{color:rgb(172, 67, 20);}}


</style>
<title>Crear</title>


</head>

<body>
<div class="text-center">
<h1>Bienvenido </h1>
</div>

<?php

//echo validation_errors(); // para validar los errores
echo form_open('post/crearusuario'); // asignar la ruta para mandar los datos por post
?>
  <div class="text-center">
  <div class="container">
<h2 class="text-center">crear cuenta</h2>

<table id="prueba"  class="table" >
<tr>


<!-- <input type="text" name= "Nombre"    value= "" placeholder="Daniel Rueda" required="required"> 			 </td>   -->

<td class="text-left"> Nombre : </td>
<td class="text-left">
<input type="text" name= "nombre"    value="" placeholder="Gariela erazo" required="required"> </td>
</tr>
<td class="text-left"> Login : </td>
<td class="text-left">
<input type="text" name= "login"    value= "" placeholder="shofry" required="required"> 			 </td><!--   -->
</tr>
<tr>
<td class="text-left">Telefono: </td>
<td class="text-left"><input type="text" name= "telefono" value= "" placeholder="3193789277" required="required"> </td>  <!--   -->
</tr>
<td class="text-left" >Email: </td>

<td class="text-left" ><input type="text" name= "email" value= "" placeholder="carlos@hotmail.com" required="required"> </td>  <!--   -->
</tr>
<tr>
<td class="text-left">Cuenta: </td>
<td class="text-left"><select name="rol" >
<option> - </option>
<option>Administrador</option>
<option>Editor</option>
<option>Usuario</option></select>
</td> <!-- http://html.hazunaweb.com/120.php  -->
</tr>
<td class="text-left">Clave:</td>
<td class="text-left">   <input type="password" name= "Password"  value= "" placeholder="*********" required="required" >	 </td> <!--   -->
</tr>
<tr>
<td class="text-left">confirmar clave:</td>
<td class="text-left"> <input type="password" name= "rPassword" value= "" placeholder="*********" required="required">	 </td> <!--   -->
</tr>
<tr>
          <td><a href="<?php echo site_url('post'); ?>"><samll>Regresar</samll> </a>
            </td>
<td class="text-left">
  <input type="submit" value="enviar"/>
  <?php

  echo form_close();
  echo validation_errors();
  ?>
  <h2><?php if (isset($mensaje)) {
      echo $mensaje;
  } ?></h2>

 </td>
</tr>
</div>

</form>

</table>


</div>



</body>
</html>
