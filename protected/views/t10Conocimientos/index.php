<?php
/* @var $this T10ConocimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T10 Conocimientoses',
);

$this->menu=array(
	array('label'=>'Create T10Conocimientos', 'url'=>array('create')),
	array('label'=>'Manage T10Conocimientos', 'url'=>array('admin')),
);
?>

<h1>T10 Conocimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
