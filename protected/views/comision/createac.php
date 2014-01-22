<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Modulo de actas'=> array('acta'),
	'Nueva acta',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1>Nueva Acta</h1>

<?php $this->renderPartial('_form_ac', array('model'=>$model)); ?>