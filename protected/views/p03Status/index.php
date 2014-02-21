<?php
/* @var $this P03StatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P03 Statuses',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nuevo Status', 'url'=>array('create')),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1> Status</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
