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

 <div class="container" id="general">
<table class="table">

  <?php if (!empty($query)): ?>
  <?php foreach ($query->result() as $rows) : ?>
    <tr>
      <td><?php echo $rows->nombre ?></td>
      <td><?php echo $rows->post ?></td>
      <td><?php echo $rows->created ?></td>
     <td>

<input   type="button" value="editar" onclick="msge()" />
<input   type="button" value="borrar" onclick="msgb()" />
<?php endforeach;
echo $this->pagination->create_links();
?>
<tr>
<ul>
<li><a href = "<?php echo site_url('post'); ?>">Inicio</a></li>
</ul>
</tr>




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
