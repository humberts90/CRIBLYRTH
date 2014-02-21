<?php
/* @var $this P01RolController */
/* @var $model P01Rol */

$this->breadcrumbs=array(
	'P01 Rols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Roles', 'url'=>array('index')),
	array('label'=>'Administrar Roles', 'url'=>array('admin')),
);
?>

<h1>Nuevo Rol</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>