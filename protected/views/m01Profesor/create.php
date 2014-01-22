<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M01Profesor', 'url'=>array('index')),
	array('label'=>'Manage M01Profesor', 'url'=>array('admin')),
);
?>

<h1>Create M01Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>