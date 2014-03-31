<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Administrar Areas de Conomicmiento', 'url'=>array('admin')),
);
?>

<h1>Nuevo Conocimiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>