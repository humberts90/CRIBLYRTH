<?php
/* @var $this M01ProfesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M01 Profesors',
);

$this->menu=array(
	array('label'=>'Create M01Profesor', 'url'=>array('create')),
	array('label'=>'Manage M01Profesor', 'url'=>array('admin')),
);
?>

<h1>M01 Profesors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
