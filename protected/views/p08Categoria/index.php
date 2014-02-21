<?php
/* @var $this P08CategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P08 Categorias',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nueva Categoria', 'url'=>array('create')),
	array('label'=>'Administrar Categoria', 'url'=>array('admin')),
);
?>

<h1>Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
