<?php
/* @var $this P08CategoriaController */
/* @var $model P08Categoria */

$this->breadcrumbs=array(
	'P08 Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P08Categoria', 'url'=>array('index')),
	array('label'=>'Manage P08Categoria', 'url'=>array('admin')),
);
?>

<h1>Create P08Categoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>