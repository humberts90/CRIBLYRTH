<?php
/* @var $this P01RolController */
/* @var $model P01Rol */

$this->breadcrumbs=array(
	'P01 Rols'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Roles', 'url'=>array('index')),
	array('label'=>'Nuevo Rol', 'url'=>array('create')),
	array('label'=>'Actualizar Roles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Rol', 'url'=>array('admin')),
);
?>

<h1>Rol <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'nombre',
		'Descripcion',
	),
)); ?>
