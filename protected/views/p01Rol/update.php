<?php
/* @var $this P01RolController */
/* @var $model P01Rol */

$this->breadcrumbs=array(
	'P01 Rols'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P01Rol', 'url'=>array('index')),
	array('label'=>'Create P01Rol', 'url'=>array('create')),
	array('label'=>'View P01Rol', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P01Rol', 'url'=>array('admin')),
);
?>

<h1>Update P01Rol <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>