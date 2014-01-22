<?php
/* @var $this T09NoticiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T09 Noticiases',
);

$this->menu=array(
	array('label'=>'Create T09Noticias', 'url'=>array('create')),
	array('label'=>'Manage T09Noticias', 'url'=>array('admin')),
);
?>

<h1>T09 Noticiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
