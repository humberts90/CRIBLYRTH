<?php
/* @var $this P01RolController */
/* @var $model P01Rol */

$this->breadcrumbs=array(
	'P01 Rols'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Roles', 'url'=>array('index')),
	array('label'=>'Nuevo Rol', 'url'=>array('create')),
	array('label'=>'Detalle del Rol', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Roles', 'url'=>array('admin')),
);
?>

<h1>Actualizar Rol <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>