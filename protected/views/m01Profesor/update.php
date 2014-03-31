<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Detalles del Profesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Profesor </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>