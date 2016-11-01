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
<div class="container" >
<title>Editar Usuario</title>

</head>
<body>
<h1>Editar Post </h1></div>

  <?php if (!empty($query_edicion)):
    echo '<pre>';
    //print_r($query_edicion);
    echo '</pre>';
    ?>
<?php  echo form_open('post/post_update'); ?>

<table  class="table">
  <tr>
<td class="text-left" >id : </td>
<td class="text-left" >
  <input type="text" name= "id" value= "<?php echo $query_edicion['id'] ?>" placeholder="5" readonly="readonly"> </td><!--   -->
</tr>
<tr>
<td class="text-left">nombre : </td>
<td class="text-left">
<input type="text" name= "nombre" value= "<?php echo $query_edicion['nombre'] ?>" placeholder="Daniel Rueda" required="required">           </td><!--   -->
</tr>
<td class="text-left">post : </td>
<td class="text-left">
  <textarea name="pos" id="editor1" value="<?php echo $query_edicion['post'] ?>" ></textarea>
</td><!--   -->
</tr>
      <td><a href="<?php echo site_url('post/paginationpost'); ?>"><samll>Regresar</samll> </a> </td>

    <td > <input type="submit" value="Editar" > </td>
</table>
<script>
           CKEDITOR.replace( 'editor1' );
       </script>

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
