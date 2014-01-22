<?php
/* @var $this P08CategoriaController */
/* @var $model P08Categoria */

$this->breadcrumbs=array(
	'P08 Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P08Categoria', 'url'=>array('index')),
	array('label'=>'Create P08Categoria', 'url'=>array('create')),
	array('label'=>'View P08Categoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P08Categoria', 'url'=>array('admin')),
);
?>

<h1>Update P08Categoria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>