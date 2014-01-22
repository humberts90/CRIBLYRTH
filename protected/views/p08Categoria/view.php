<?php
/* @var $this P08CategoriaController */
/* @var $model P08Categoria */

$this->breadcrumbs=array(
	'P08 Categorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List P08Categoria', 'url'=>array('index')),
	array('label'=>'Create P08Categoria', 'url'=>array('create')),
	array('label'=>'Update P08Categoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete P08Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage P08Categoria', 'url'=>array('admin')),
);
?>

<h1>View P08Categoria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
	),
)); ?>
