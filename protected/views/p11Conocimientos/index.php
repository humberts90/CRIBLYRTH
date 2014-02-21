<?php
/* @var $this P11ConocimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P11 Conocimientoses',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nuevo Conocimiento', 'url'=>array('create')),	
	array('label'=>'Administrar Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Conocimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
