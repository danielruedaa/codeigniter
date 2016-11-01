<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/funciones.js" ></script>
<script src="<?php echo base_url() ?>asset/css/hojaEstilo.css" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" ></script>

<title>manager</title>

</head>
<body>

<div class="text-center">
<h1>Bienvenido al sistema </h1>
</div>
<div class="container">

<table id="prueba"  class="table">
<div class="text-center">

<?php if (!empty($query)): ?>
<?php $control = false;
if (isset($_SESSION['email'])) {
    $ingreso2 = $_SESSION['email'];
    $control = true;
    echo 'Ingreso como '.$ingreso2;
} else {
    echo 'No hay usuario registrado';
}

?>
<tr>
  <td><label> Id</label></td>
  <td><label> Nombre</label></td>
  <td><label> Login</label></td>
  <td><label> Correo</label></td>
  <td><label> Rol</label></td>
  <td><label> Login</label></td>
  <td><label> Opciones</label></td>
</tr>
<?php foreach ($query->result() as $rows) : ?>
  <?php if ($control == true) {
    // code...
 ?>
  <tr>
    <td><?php echo $id = $rows->id ?></td>
    <td><?php echo $rows->nombre ?></td>
    <td><?php echo $rows->telefono ?></td>
    <td><?php echo $rows->email ?></td>
    <td><?php echo $rows->rol ?></td>
    <td><?php echo $rows->login ?></td>

   <td>

<?php
echo anchor('post/send_editar/'.$id, 'editar', array('class' => '_editar')); ?>

<?php
echo anchor('post/send_borrar/'.$id, 'borrar', array('class' => '_borrar')); ?>

    </td>
  </tr>
  <?php

} else {
    echo 'no se puede mostrar tabla';
} ?>
<?php endforeach;
echo $this->pagination->create_links();
 ?>
<?php else : ?>
<?php endif; ?>

</tr>
</table>
<ul class="list-inline">

  <li><a href = "<?php echo site_url('post/manager_editor'); ?>">Crear post</a></li>
  <li><a href = "<?php echo site_url('post/paginationpost'); ?>">Ver el post</a></li>
  <li><a href = "<?php echo site_url('post/logout'); ?>">Salir</a></li>
</ul>
</div>
</div>

</body>




</html>
