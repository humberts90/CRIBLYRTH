<?php
/* @var $this P03StatusController */
/* @var $model P03Status */

$this->breadcrumbs=array(
	'P03 Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Status', 'url'=>array('index')),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>Nuevo Status</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>