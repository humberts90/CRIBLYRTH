<?php
/* @var $this P03StatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P03 Statuses',
);

$this->menu=array(
	array('label'=>'Create P03Status', 'url'=>array('create')),
	array('label'=>'Manage P03Status', 'url'=>array('admin')),
);
?>

<h1>P03 Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
