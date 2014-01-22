<?php
/* @var $this M02TematicaController */
/* @var $model M02Tematica */

$this->breadcrumbs=array(
	'M02 Tematicas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M02Tematica', 'url'=>array('index')),
	array('label'=>'Create M02Tematica', 'url'=>array('create')),
	array('label'=>'Update M02Tematica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M02Tematica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M02Tematica', 'url'=>array('admin')),
);
?>

<h1>View M02Tematica #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
	),
)); ?>
