<?php
/* @var $this P10EjeCurricularController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P10 Eje Curriculars',
);

$this->menu=array(
	array('label'=>'Create P10EjeCurricular', 'url'=>array('create')),
	array('label'=>'Manage P10EjeCurricular', 'url'=>array('admin')),
);
?>

<h1>P10 Eje Curriculars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
