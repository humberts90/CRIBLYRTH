<?php
/* @var $this T06ObservacionController */
/* @var $model T06Observacion */

$this->breadcrumbs=array(
	'T06 Observacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List T06Observacion', 'url'=>array('index')),
	array('label'=>'Manage T06Observacion', 'url'=>array('admin')),
);
?>

<h1>Create T06Observacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>