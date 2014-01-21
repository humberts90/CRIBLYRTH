<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */

$this->breadcrumbs=array(
	'T03 Actas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List T03Acta', 'url'=>array('index')),
	array('label'=>'Create T03Acta', 'url'=>array('create')),
	array('label'=>'Update T03Acta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete T03Acta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage T03Acta', 'url'=>array('admin')),
);
?>

<h1>View T03Acta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'M05_id',
		'Descripcion',
		'Fecha',
		'Anexo',
	),
)); ?>
