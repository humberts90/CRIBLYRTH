<?php
/* @var $this P10AreasConomicmientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P10 Areas Conomicmientos',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Administar Areas de Conomicmiento', 'url'=>array('admin')),
);
?>

<h1> Areas de Conomicmientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
