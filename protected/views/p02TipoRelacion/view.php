<?php
/* @var $this P02TipoRelacionController */
/* @var $model P02TipoRelacion */

$this->breadcrumbs=array(
	'P02 Tipo Relacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P02TipoRelacion', 'url'=>array('index')),
	array('label'=>'Create P02TipoRelacion', 'url'=>array('create')),
	array('label'=>'Update P02TipoRelacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P02TipoRelacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P02TipoRelacion', 'url'=>array('admin')),
);
?>

<h1>View P02TipoRelacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
	),
)); ?>
