<?php
/* @var $this M03TesisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M03 Tesises',
);

$this->menu=array(
	array('label'=>'Create M03Tesis', 'url'=>array('create')),
	array('label'=>'Manage M03Tesis', 'url'=>array('admin')),
);
?>

<h1>M03 Tesises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
