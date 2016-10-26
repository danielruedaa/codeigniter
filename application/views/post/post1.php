<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</script>

<!--<link rel="stylesheet" type="text/css" href="estiloCss/hojaEstilo.css"/>-->
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


</script>

<title>post</title>



</head>

<div class="text-center">
<h1>Bienvenido escribe tu post ....</h1> 
</div>

<body>
<form action="phpBaseDatos/comentarios.php" method="post" >
<div class="text-center">
<td>Nombre : </td>
<td>  
<input type="text" name= "nombre"    value= "" placeholder="Daniel Rueda" required="required">       </td>

<textarea name="editor1" id="editor1"></textarea>
<table class="table" >

<ul class="text-left">
 <li><a href = "Inicio.html">inicio</a> </li>
  <li>        <a href = "leer.php">ir al post</a></li>
   <li>  <input type="submit" value="guardar"> </li>

</ul>
    </table>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>

</form>



</div>
</body>
</html>
