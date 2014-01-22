<?php
/* @var $this T11ActividadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'T11 Actividads',
);

$this->menu=array(
	array('label'=>'Create T11Actividad', 'url'=>array('create')),
	array('label'=>'Manage T11Actividad', 'url'=>array('admin')),
);
?>

<h1>T11 Actividads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
