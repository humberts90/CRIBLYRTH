<?php
/* @var $this T07ObservacionTesisController */
/* @var $model T07ObservacionTesis */

$this->breadcrumbs=array(
	'T07 Observacion Tesises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List T07ObservacionTesis', 'url'=>array('index')),
	array('label'=>'Manage T07ObservacionTesis', 'url'=>array('admin')),
);
?>

<h1>Create T07ObservacionTesis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>