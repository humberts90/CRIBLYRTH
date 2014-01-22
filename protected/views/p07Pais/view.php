<?php
/* @var $this P07PaisController */
/* @var $model P07Pais */

$this->breadcrumbs=array(
	'P07 Paises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P07Pais', 'url'=>array('index')),
	array('label'=>'Create P07Pais', 'url'=>array('create')),
	array('label'=>'Update P07Pais', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P07Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P07Pais', 'url'=>array('admin')),
);
?>

<h1>View P07Pais #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
	),
)); ?>
