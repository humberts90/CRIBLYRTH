<?php
/* @var $this P03StatusController */
/* @var $model P03Status */

$this->breadcrumbs=array(
	'P03 Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P03Status', 'url'=>array('index')),
	array('label'=>'Manage P03Status', 'url'=>array('admin')),
);
?>

<h1>Create P03Status</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>