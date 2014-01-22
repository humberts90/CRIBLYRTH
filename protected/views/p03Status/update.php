<?php
/* @var $this P03StatusController */
/* @var $model P03Status */

$this->breadcrumbs=array(
	'P03 Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P03Status', 'url'=>array('index')),
	array('label'=>'Create P03Status', 'url'=>array('create')),
	array('label'=>'View P03Status', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P03Status', 'url'=>array('admin')),
);
?>

<h1>Update P03Status <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>