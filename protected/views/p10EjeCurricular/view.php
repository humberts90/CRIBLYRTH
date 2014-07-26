<?php
/* @var $this P10EjeCurricularController */
/* @var $model P10EjeCurricular */

$this->breadcrumbs=array(
	'P10 Eje Curriculars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P10EjeCurricular', 'url'=>array('index')),
	array('label'=>'Create P10EjeCurricular', 'url'=>array('create')),
	array('label'=>'Update P10EjeCurricular', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P10EjeCurricular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P10EjeCurricular', 'url'=>array('admin')),
);
?>

<h1>View P10EjeCurricular #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'P09_id',
		'id',
		'Nombre',
	),
)); ?>
