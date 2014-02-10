<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Oferta TAP' , 'detalle tesis'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Detalle tesis</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Titulo',
		'Introduccion',
		'Planteamiento_Problema',
		'Referencias'
	),
)); ?>