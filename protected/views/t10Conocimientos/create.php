<?php
/* @var $this T10ConocimientosController */
/* @var $model T10Conocimientos */

$this->breadcrumbs=array(
	'T10 Conocimientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List T10Conocimientos', 'url'=>array('index')),
	array('label'=>'Manage T10Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Create T10Conocimientos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>