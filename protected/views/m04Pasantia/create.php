<?php
/* @var $this M04PasantiaController */
/* @var $model M04Pasantia */

$this->breadcrumbs=array(
	'M04 Pasantias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M04Pasantia', 'url'=>array('index')),
	array('label'=>'Manage M04Pasantia', 'url'=>array('admin')),
);
?>

<h1>Create M04Pasantia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>