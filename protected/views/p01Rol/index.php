<?php
/* @var $this P01RolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P01 Rols',
);

$this->menu=array(
	array('label'=>'Create P01Rol', 'url'=>array('create')),
	array('label'=>'Manage P01Rol', 'url'=>array('admin')),
);
?>

<h1>P01 Rols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
