<?php
/* @var $this T03ActaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T03 Actas',
);

$this->menu=array(
	array('label'=>'Create T03Acta', 'url'=>array('create')),
	array('label'=>'Manage T03Acta', 'url'=>array('admin')),
);
?>

<h1>T03 Actas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
