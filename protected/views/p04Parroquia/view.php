<?php
/* @var $this P04ParroquiaController */
/* @var $model P04Parroquia */

$this->breadcrumbs=array(
	'P04 Parroquias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P04Parroquia', 'url'=>array('index')),
	array('label'=>'Create P04Parroquia', 'url'=>array('create')),
	array('label'=>'Update P04Parroquia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P04Parroquia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P04Parroquia', 'url'=>array('admin')),
);
?>

<h1>View P04Parroquia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'P05_id',
		'Descripcion',
	),
)); ?>
