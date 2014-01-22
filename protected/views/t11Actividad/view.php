<?php
/* @var $this T11ActividadController */
/* @var $model T11Actividad */

$this->breadcrumbs=array(
	'T11 Actividads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List T11Actividad', 'url'=>array('index')),
	array('label'=>'Create T11Actividad', 'url'=>array('create')),
	array('label'=>'Update T11Actividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete T11Actividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage T11Actividad', 'url'=>array('admin')),
);
?>

<h1>View T11Actividad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'M04_Pasantia_id',
		'Descripcion',
		'Fecha_inicio',
		'Fecha_Fin',
	),
)); ?>
