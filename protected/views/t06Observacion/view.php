<?php
/* @var $this T06ObservacionController */
/* @var $model T06Observacion */

$this->breadcrumbs=array(
	'T06 Observacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List T06Observacion', 'url'=>array('index')),
	array('label'=>'Create T06Observacion', 'url'=>array('create')),
	array('label'=>'Update T06Observacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete T06Observacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage T06Observacion', 'url'=>array('admin')),
);
?>

<h1>View T06Observacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'M03_id',
	),
)); ?>
