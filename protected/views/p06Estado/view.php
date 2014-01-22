<?php
/* @var $this P06EstadoController */
/* @var $model P06Estado */

$this->breadcrumbs=array(
	'P06 Estados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P06Estado', 'url'=>array('index')),
	array('label'=>'Create P06Estado', 'url'=>array('create')),
	array('label'=>'Update P06Estado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P06Estado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P06Estado', 'url'=>array('admin')),
);
?>

<h1>View P06Estado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'P07_id',
		'Descripcion',
	),
)); ?>
