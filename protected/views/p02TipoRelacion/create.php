<?php
/* @var $this P02TipoRelacionController */
/* @var $model P02TipoRelacion */

$this->breadcrumbs=array(
	'P02 Tipo Relacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P02TipoRelacion', 'url'=>array('index')),
	array('label'=>'Manage P02TipoRelacion', 'url'=>array('admin')),
);
?>

<h1>Create P02TipoRelacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>