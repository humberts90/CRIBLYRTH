<?php
/* @var $this P06EstadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P06 Estados',
);

$this->menu=array(
	array('label'=>'Create P06Estado', 'url'=>array('create')),
	array('label'=>'Manage P06Estado', 'url'=>array('admin')),
);
?>

<h1>P06 Estados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
