<?php
/* @var $this P09DepartamentoController */
/* @var $model P09Departamento */

$this->breadcrumbs=array(
	'P09 Departamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P09Departamento', 'url'=>array('index')),
	array('label'=>'Create P09Departamento', 'url'=>array('create')),
	array('label'=>'Update P09Departamento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P09Departamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P09Departamento', 'url'=>array('admin')),
);
?>

<h1>View P09Departamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Nombre',
	),
)); ?>
