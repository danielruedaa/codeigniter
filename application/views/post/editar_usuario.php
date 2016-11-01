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
<div class="container" >
<title>Editar Usuario</title>

</head>
<body>
<h1>Editar usuario </h1></div>

  <?php if (!empty($query_edicion)):
    echo '<pre>';
    //print_r($query_edicion);
    echo '</pre>';
    ?>
<?php  echo form_open('post/send_editar_update'); ?>

<table  class="table">
  <tr>
<td class="text-left" >id : </td>
<td class="text-left" >
<input type="text" name= "id" value= "<?php echo $query_edicion['id'] ?>" placeholder="5" readonly="readonly"> </td><!--   -->
</tr>
    <td  >nombre completo : </td>
    <td  >
    <input type="text" name= "nombre"       value= "<?php echo $query_edicion['nombre']   ?>" placeholder="Daniel Rueda" required="required">           </td>
    </tr>
    <td  >login : </td>
    <td  >
    <input type="text" name= "login"         value= "<?php echo $query_edicion['login']    ?>" placeholder="shofry" required="required">              </td>
    </tr>
    <tr>
    <td  >telefono: </td>
    <td  >
    <input type="text" name= "telefono"      value= "<?php echo $query_edicion['telefono'] ?>" placeholder="3193789277" required="required"> </td>
    </tr>
    <td  >email: </td>
    <td  >
    <input type="text" name= "email"         value= "<?php echo $query_edicion['email']    ?>" placeholder="carlos@hotmail.com" required="required"> </td>
    </tr>
    <td  >cambiar rol: </td>
    <td  ><select name="rol" >
      <option><?php echo $query_edicion['rol'] ?> </option>
    <option>Administrador</option>
    <option>Editor</option>
    <option>Usuario</option>
    </select>
    </td>
    </tr>
    <td  >clave:</td>
    <td  >
    <input type="password" name= "Password"  value= "<?php echo $query_edicion['clave']    ?>" placeholder="*********" readonly="readonly" >  </td>
    </tr>
    <td  >antigua clave:</td>
    <td  >
    <input type="password" name= "comparar"  value= "" placeholder="*********" required="required" >  </td>
    </tr>
    <tr>
    <td >nueva clave:</td>
    <td  >
    <input type="password" name= "nueva_clave" value= "" placeholder="*********" ></td>
    </tr>
        <td><a href="<?php echo site_url('post'); ?>"><samll>Regresar</samll> </a> </td>
    <td > <input type="submit" value="Editar" > </td>
</table>
<?php else : ?>
<?php endif; ?>
<?php echo form_close();
echo validation_errors();
?>
<h2><?php if (isset($mensaje)) {
    echo $mensaje;
} ?></h2>
</body>
</html>
