<?php
/* @var $this P04ParroquiaController */
/* @var $model P04Parroquia */

$this->breadcrumbs=array(
	'P04 Parroquias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P04Parroquia', 'url'=>array('index')),
	array('label'=>'Manage P04Parroquia', 'url'=>array('admin')),
);
?>

<h1>Create P04Parroquia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>