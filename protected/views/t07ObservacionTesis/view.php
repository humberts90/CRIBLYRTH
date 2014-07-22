<?php
/* @var $this T07ObservacionTesisController */
/* @var $model T07ObservacionTesis */

$this->breadcrumbs=array(
	'T07 Observacion Tesises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List T07ObservacionTesis', 'url'=>array('index')),
	array('label'=>'Create T07ObservacionTesis', 'url'=>array('create')),
	array('label'=>'Update T07ObservacionTesis', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete T07ObservacionTesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage T07ObservacionTesis', 'url'=>array('admin')),
);
?>

<h1>View T07ObservacionTesis #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'M03_id',
	),
)); ?>
