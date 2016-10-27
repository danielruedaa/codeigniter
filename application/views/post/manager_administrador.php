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

<?php foreach ($query->result() as $rows) : ?>
  <tr>
    <td><?php echo $id = $rows->id ?></td>
    <td><?php echo $rows->nombre ?></td>
    <td><?php echo $rows->telefono ?></td>
    <td><?php echo $rows->email ?></td>
    <td><?php echo $rows->rol ?></td>
    <td><?php echo $rows->login ?></td>

   <td>

<?php
echo anchor('post/send_editar/'.$id, 'editar', array('class' => '_editar'));
?>

<?php
echo anchor('post/send_borrar/'.$id, 'borrar', array('class' => '_borrar'));
?>


<?php
 $funcion = 'onClick="msgb()"';
 $buttonDelete = array(
    'name' => 'buttonDelete',
    'value' => $id,
);
//pendiente hacerlo con el boton
//echo form_button($buttonDelete, 'borrar', $funcion);
?>
    </td>
  </tr>
<script language="javascript">

</script>

<?php endforeach;
echo $this->pagination->create_links();
 ?>
<?php else : ?>
<?php endif; ?>

</tr>
</table>
<ul>
  <li><a href = "<?php echo site_url('post'); ?>">Inicio</a></li>
  <li><a href = "<?php echo site_url('post/manager_editor'); ?>">Crear post</a></li>
  <li><a href = "<?php echo site_url('post/manager_usuario'); ?>">Ver el post</a></li>

</ul>
</div>
</div>

</body>




</html>
