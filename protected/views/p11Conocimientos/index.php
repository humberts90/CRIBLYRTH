<?php
/* @var $this P11ConocimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P11 Conocimientoses',
);

$this->menu=array(
	array('label'=>'Create P11Conocimientos', 'url'=>array('create')),
	array('label'=>'Manage P11Conocimientos', 'url'=>array('admin')),
);
?>

<h1>P11 Conocimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
