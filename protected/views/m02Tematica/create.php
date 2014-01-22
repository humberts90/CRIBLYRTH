<?php
/* @var $this M02TematicaController */
/* @var $model M02Tematica */

$this->breadcrumbs=array(
	'M02 Tematicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M02Tematica', 'url'=>array('index')),
	array('label'=>'Manage M02Tematica', 'url'=>array('admin')),
);
?>

<h1>Create M02Tematica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>