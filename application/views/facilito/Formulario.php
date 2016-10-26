<body>
<? = form_open("/Codf/recibirdatos")?>
<?
echo "entro al formulario";
$nombre=array(
'name'=>'nombre',
'placeholder'='escribe tu nombre'
);

$videos=array(
'name'=>'videos',
'placeholder'='cantidad videos'
);
?>
   <? = form_label('Nombre', 'nombre') ?>
   <? = form_input($nombre) ?>
<br/>

   <? = form_label('numero videos','videos') ?>
   <? = form_input($videos) ?>
   <?= form_submit('', 'enviar') ?>
   <?= form_close() ?>

</body>
</html>
