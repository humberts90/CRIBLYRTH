<?php
/* @var $this P01RolController */
/* @var $model P01Rol */

$this->breadcrumbs=array(
	'P01 Rols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P01Rol', 'url'=>array('index')),
	array('label'=>'Manage P01Rol', 'url'=>array('admin')),
);
?>

<h1>Create P01Rol</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>