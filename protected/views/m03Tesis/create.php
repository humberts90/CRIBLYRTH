<?php
/* @var $this M03TesisController */
/* @var $model M03Tesis */

$this->breadcrumbs=array(
	'M03 Tesises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M03Tesis', 'url'=>array('index')),
	array('label'=>'Manage M03Tesis', 'url'=>array('admin')),
);
?>

<h1>Create M03Tesis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>