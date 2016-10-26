<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
5454
<?php echo form_open('news/create'); ?>//direccion donde manda los datos 
<fieldset>
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item :)" />
</fieldset>
</form>
