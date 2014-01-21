<?php
/* @var $this M04PasantiaController */
/* @var $model M04Pasantia */

$this->breadcrumbs=array(
	'M04 Pasantias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M04Pasantia', 'url'=>array('index')),
	array('label'=>'Create M04Pasantia', 'url'=>array('create')),
	array('label'=>'Update M04Pasantia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M04Pasantia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M04Pasantia', 'url'=>array('admin')),
);
?>

<h1>View M04Pasantia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Titulo',
		'Planteamiento_Problema',
		'Descripcion_Trabajo',
		'Objetivo_General',
		'Objetivo_Especifico',
		'Antecedentes',
		'Metodologia',
		'Productos_Desarrollo',
		'M06_id',
	),
)); ?>
