<?php
/* @var $this T10ConocimientosController */
/* @var $model T10Conocimientos */

$this->breadcrumbs=array(
	'T10 Conocimientoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List T10Conocimientos', 'url'=>array('index')),
	array('label'=>'Create T10Conocimientos', 'url'=>array('create')),
	array('label'=>'Update T10Conocimientos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete T10Conocimientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage T10Conocimientos', 'url'=>array('admin')),
);
?>

<h1>View T10Conocimientos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'M04_Pasantia_id',
	),
)); ?>
