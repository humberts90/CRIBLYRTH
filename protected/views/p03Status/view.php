<?php
/* @var $this P03StatusController */
/* @var $model P03Status */

$this->breadcrumbs=array(
	'P03 Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P03Status', 'url'=>array('index')),
	array('label'=>'Create P03Status', 'url'=>array('create')),
	array('label'=>'Update P03Status', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P03Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P03Status', 'url'=>array('admin')),
);
?>

<h1>View P03Status #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
	),
)); ?>
