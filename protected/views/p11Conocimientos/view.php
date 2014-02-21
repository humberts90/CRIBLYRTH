<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Conocimientos', 'url'=>array('index')),
	array('label'=>'Nuevo Conocimiento', 'url'=>array('create')),
	array('label'=>'Actualizar Conocimiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Conocimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Conocimientos', 'url'=>array('admin')),
);
?>

<h1> Detalles de Conocimiento <?php echo $model->Nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Nombre',
		array(
		'name'=>'Area de Conocimiento',
		'value'=>$model->p10->Nombre,
		
		),
		'Descripcion',
	),
)); ?>
