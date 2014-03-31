<?php
/* @var $this M01ProfesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M01 Profesors',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Administrar Profesor', 'url'=>array('admin')),
);
?>

<h1> Profesores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
