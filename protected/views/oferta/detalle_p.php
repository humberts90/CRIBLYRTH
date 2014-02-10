<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP' , 'detalle pasantia'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Detalle pasantia</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Titulo',
		'Planteamiento_Problema',
		'Descripcion_Trabajo',
		'M06_id',
	),
)); ?>