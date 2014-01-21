<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */

$this->breadcrumbs=array(
	'T03 Actas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List T03Acta', 'url'=>array('index')),
	array('label'=>'Manage T03Acta', 'url'=>array('admin')),
);
?>

<h1>Create T03Acta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>