<?php
/* @var $this P01RolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P01 Rols',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nuevo Rol', 'url'=>array('create')),
	array('label'=>'Administrar Roles', 'url'=>array('admin')),
);
?>

<h1> Roles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
