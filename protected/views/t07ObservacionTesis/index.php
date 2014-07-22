<?php
/* @var $this T07ObservacionTesisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T07 Observacion Tesises',
);

$this->menu=array(
	array('label'=>'Create T07ObservacionTesis', 'url'=>array('create')),
	array('label'=>'Manage T07ObservacionTesis', 'url'=>array('admin')),
);
?>

<h1>T07 Observacion Tesises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
