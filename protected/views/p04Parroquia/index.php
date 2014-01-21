<?php
/* @var $this P04ParroquiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P04 Parroquias',
);

$this->menu=array(
	array('label'=>'Create P04Parroquia', 'url'=>array('create')),
	array('label'=>'Manage P04Parroquia', 'url'=>array('admin')),
);
?>

<h1>P04 Parroquias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
