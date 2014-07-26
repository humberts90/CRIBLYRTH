<?php
/* @var $this P09DepartamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P09 Departamentos',
);

$this->menu=array(
	array('label'=>'Create P09Departamento', 'url'=>array('create')),
	array('label'=>'Manage P09Departamento', 'url'=>array('admin')),
);
?>

<h1>P09 Departamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
