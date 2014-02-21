<?php
/* @var $this P09DepartamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P09 Departamentos',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),	
	array('label'=>'Nuevo Departamento', 'url'=>array('create')),	
	array('label'=>'Administrar Departamentos', 'url'=>array('admin')),
);
?>

<h1> Departamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
