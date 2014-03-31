<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Actualizar Profesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Profesores ', 'url'=>array('admin')),
);
?>

<h1> Profesor <?php echo $model->Nombre.' '.$model->Apellido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Correo_UNET',
	),
)); ?>
