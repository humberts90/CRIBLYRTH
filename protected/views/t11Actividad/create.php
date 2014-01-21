<?php
/* @var $this T11ActividadController */
/* @var $model T11Actividad */

$this->breadcrumbs=array(
	'T11 Actividads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List T11Actividad', 'url'=>array('index')),
	array('label'=>'Manage T11Actividad', 'url'=>array('admin')),
);
?>

<h1>Create T11Actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>