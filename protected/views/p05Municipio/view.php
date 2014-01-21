<?php
/* @var $this P05MunicipioController */
/* @var $model P05Municipio */

$this->breadcrumbs=array(
	'P05 Municipios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P05Municipio', 'url'=>array('index')),
	array('label'=>'Create P05Municipio', 'url'=>array('create')),
	array('label'=>'Update P05Municipio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P05Municipio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P05Municipio', 'url'=>array('admin')),
);
?>

<h1>View P05Municipio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'P06_id',
		'Descripcion',
	),
)); ?>
