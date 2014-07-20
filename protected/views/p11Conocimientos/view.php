<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P11Conocimientos', 'url'=>array('index')),
	array('label'=>'Create P11Conocimientos', 'url'=>array('create')),
	array('label'=>'Update P11Conocimientos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P11Conocimientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P11Conocimientos', 'url'=>array('admin')),
);
?>

<h1>View P11Conocimientos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Nombre',
		'P09_id',
		'Descripcion',
	),
)); ?>
