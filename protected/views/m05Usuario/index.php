<?php
/* @var $this M05UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M05 Usuarios',
);

$this->menu=array(
	array('label'=>'Create M05Usuario', 'url'=>array('create')),
	array('label'=>'Manage M05Usuario', 'url'=>array('admin')),
);
?>

<h1>M05 Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
