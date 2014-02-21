<?php
/* @var $this P08CategoriaController */
/* @var $model P08Categoria */

$this->breadcrumbs=array(
	'P08 Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Categorias', 'url'=>array('index')),
	array('label'=>'Nueva Categoria', 'url'=>array('create')),
	array('label'=>'Detalle de Categoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoria <?php echo $model->Descripcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>