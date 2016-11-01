<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-responsive.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="estiloCss/bootstrap-bootstrap.css"/>
<script src="<?php echo base_url() ?>asset/js/funciones.js" ></script>
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
<title>Usuario post</title>

</head>
<body>
  <div class="container" >

<h1>Bienvenido al sistema </h1>
</div>

 <div id="general" class="container" >
<table class="table">
  <tr>

    <td><label> Nombre</label></td>
    <td><label> Post</label></td>
    <td><label> Fecha</label></td>
    <td><label> Opciones</label></td>
  </tr>
  <?php if (!empty($query)): ?>
  <?php foreach ($query->result() as $rows) : ?>
    <tr>
      <?php $id = $rows->id ?>
      <td><?php echo $rows->nombre ?></td>
      <td><?php echo $rows->post ?></td>
      <td><?php echo $rows->created ?></td>
      <td><?php
    echo anchor('post/editar_post/'.$id, 'editar', array('class' => '_editar')); ?>
     </td>
     <td><?php
    echo anchor('post/editar_post/'.$id, 'borrar', array('class' => '_borrar')); ?>
     </td>
</tr>
<?php endforeach;
echo $this->pagination->create_links();
?>





<!--   -->

<?php else : ?>

<?php endif; ?>

</tr>

</div>
</div>


</table>
</div>

</body>




</html>
