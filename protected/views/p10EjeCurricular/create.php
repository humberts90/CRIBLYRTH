<?php
/* @var $this P10EjeCurricularController */
/* @var $model P10EjeCurricular */

$this->breadcrumbs=array(
	'P10 Eje Curriculars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P10EjeCurricular', 'url'=>array('index')),
	array('label'=>'Manage P10EjeCurricular', 'url'=>array('admin')),
);
?>

<h1>Create P10EjeCurricular</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>