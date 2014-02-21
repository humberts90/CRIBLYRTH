<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Profesores', 'url'=>array('index')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Nuevo Profesor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>