<?php
/* @var $this M07TutorExternoController */
/* @var $model M07TutorExterno */

$this->breadcrumbs=array(
	'M07 Tutor Externos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List M07TutorExterno', 'url'=>array('index')),
	array('label'=>'Create M07TutorExterno', 'url'=>array('create')),
	array('label'=>'Update M07TutorExterno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete M07TutorExterno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage M07TutorExterno', 'url'=>array('admin')),
);
?>

<h1>View M07TutorExterno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Telefono',
		'Correo',
		'Cargo_Empresa',
		'Curriculum',
		'Enlace',
	),
)); ?>
