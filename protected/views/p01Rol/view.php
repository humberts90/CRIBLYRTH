<?php
/* @var $this P01RolController */
/* @var $model P01Rol */

$this->breadcrumbs=array(
	'P01 Rols'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P01Rol', 'url'=>array('index')),
	array('label'=>'Create P01Rol', 'url'=>array('create')),
	array('label'=>'Update P01Rol', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P01Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P01Rol', 'url'=>array('admin')),
);
?>

<h1>View P01Rol #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'Descripcion',
	),
)); ?>
