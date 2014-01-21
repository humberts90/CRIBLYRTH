<?php
/* @var $this T06ObservacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T06 Observacions',
);

$this->menu=array(
	array('label'=>'Create T06Observacion', 'url'=>array('create')),
	array('label'=>'Manage T06Observacion', 'url'=>array('admin')),
);
?>

<h1>T06 Observacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
