<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Bienvenida <?php echo $Usuario->Nombre.' '.$Usuario->Apellido;?> </h1>
<p>
	aqui va una breve reseña del sistema desde el punto de vista de la Secretaria </br>

</p>