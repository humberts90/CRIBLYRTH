<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M01Profesor', 'url'=>array('index')),
	array('label'=>'Create M01Profesor', 'url'=>array('create')),
	array('label'=>'Update M01Profesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M01Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M01Profesor', 'url'=>array('admin')),
);
?>

<h1>View M01Profesor #<?php echo $model->id; ?></h1>

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

<br /><b><label>TEMAS:</label></b><br />

<?php

	$items = T04ProfesorHasTematica::model()->findAllByAttributes(array('M01_id'=>$model->id));
	
	foreach($items as $item)
	{
		$tema = M02Tematica::model()->findByPk($item->M02_id);
		echo '<br/><label>   '.$tema->Descripcion.'</label>';	
	}
?>
