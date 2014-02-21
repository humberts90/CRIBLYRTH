<?php
/* @var $this P08CategoriaController */
/* @var $model P08Categoria */

$this->breadcrumbs=array(
	'P08 Categorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Categorias', 'url'=>array('index')),
	array('label'=>'Nueva Categoria', 'url'=>array('create')),
	array('label'=>'Actualizar Categoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Categoria <?php echo $model->Descripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Descripcion',
	),
)); ?>
