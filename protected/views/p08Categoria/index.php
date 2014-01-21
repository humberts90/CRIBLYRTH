<?php
/* @var $this P08CategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P08 Categorias',
);

$this->menu=array(
	array('label'=>'Create P08Categoria', 'url'=>array('create')),
	array('label'=>'Manage P08Categoria', 'url'=>array('admin')),
);
?>

<h1>P08 Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
