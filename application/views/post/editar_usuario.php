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
  @media(min-width: 768px)and(max-width: 979px){body{color:green;}}
  /*tablet o smartphone*/
  @media(max-width: 767px){body{color:blue;}}
  /*smartphone*/
  @media(max-width: 480px){body{color:yellow;}}


</style>
<title>Editar Usuario</title>

</head>
<body>
<div class="container" >
<div class="starter-templeta">
<div class="container" >
<div class="text-center"><h1>Editar usuario </h1></div>


<div class="container" >
<div class="text-center">
<table  class="table">

  <?php if (!empty($query_edicion)):
    echo '<pre>';
     print_r($query_edicion);
     echo '</pre>';
    ?>

  <?php     echo form_open('post/send_editar_update'); ?>
<?php foreach ($query_edicion as $key => $value) : ?>
<tr>
<td class="text-left" >id : </td>
<td class="text-left" >
<input type="text" name= "id"              value= " " placeholder="5" readonly="readonly"> </td>
</tr>
<tr>
  <td class="text-left" >nombre completo : </td>
  <td class="text-left" >
  <input type="text" name= "Nombre"        value= "" placeholder="Daniel Rueda" required="required">           </td>
  </tr>
  <td class="text-left" >login : </td>
  <td class="text-left" >
  <input type="text" name= "login"         value= "" placeholder="shofry" required="required">              </td>
  </tr>
  <tr>
  <td class="text-left" >telefono: </td>
  <td class="text-left" >
  <input type="text" name= "telefono"      value= "" placeholder="3193789277" required="required"> </td>
  </tr>
  <td class="text-left" >email: </td>
  <td class="text-left" >
  <input type="text" name= "email"         value= "" placeholder="carlos@hotmail.com" required="required"> </td>
  </tr>
  <td class="text-left" >cambiar rol: </td>
  <td class="text-left" ><select name="rol" >
    <option>  </option>
  <option>Administrador</option>
  <option>Editor</option>
  <option>Usuario</option>
  </select>
  </td>
  </tr>
  <td class="text-left" >clave:</td>
  <td class="text-left" >
  <input type="password" name= "Password"  value= "" placeholder="*********"  >  </td>
  </tr>
  <tr>
  <td class="text-left">nueva clave:</td>
  <td class="text-left" >
  <input type="password" name= "rPassword" value= "" placeholder="*********" ></td>
  </tr>
  <tr>

<td class="text-left" > <input type="submit" value="Editar" > </td>


<?php endforeach; ?>

<?php endif; ?>

<?php echo form_close();
//echo validation_errors();
?>


</table>
<h2> fin codigo
  <?php // if (isset($mensaje)) {    echo $mensaje;}?></h2>



</div>
</div>
</body>





</html>
