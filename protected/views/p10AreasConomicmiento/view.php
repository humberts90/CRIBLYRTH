<?php
/* @var $this P10AreasConomicmientoController */
/* @var $model P10AreasConomicmiento */

$this->breadcrumbs=array(
	'P10 Areas Conomicmientos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Nueva Areas de Conomicmiento', 'url'=>array('create')),
	array('label'=>'Actualizar Area de Conomicmiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Area de Conomicmiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Areas de Conomicmiento', 'url'=>array('admin')),
);
?>

<h1>View P10AreasConomicmiento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Nombre',
		array(
		'name'=>'Departamento',
		'value'=>$model->p09->Nombre,
		
		),
		'Descripcion',
	),
)); ?>
