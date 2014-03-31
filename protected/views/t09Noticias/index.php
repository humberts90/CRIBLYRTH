<?php
/* @var $this T09NoticiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T09 Noticiases',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nueva Noticias', 'url'=>array('create')),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1> Noticias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
