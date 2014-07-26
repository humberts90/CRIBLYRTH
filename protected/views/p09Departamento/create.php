<?php
/* @var $this P09DepartamentoController */
/* @var $model P09Departamento */

$this->breadcrumbs=array(
	'P09 Departamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P09Departamento', 'url'=>array('index')),
	array('label'=>'Manage P09Departamento', 'url'=>array('admin')),
);
?>

<h1>Create P09Departamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>