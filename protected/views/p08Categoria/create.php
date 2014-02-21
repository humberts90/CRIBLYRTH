<?php
/* @var $this P08CategoriaController */
/* @var $model P08Categoria */

$this->breadcrumbs=array(
	'P08 Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Categorias', 'url'=>array('index')),
	array('label'=>'Administrar Categorias', 'url'=>array('admin')),
);
?>

<h1>Nueva Categoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>