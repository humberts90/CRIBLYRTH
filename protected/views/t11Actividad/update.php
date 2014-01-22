<?php
/* @var $this T11ActividadController */
/* @var $model T11Actividad */

$this->breadcrumbs=array(
	'T11 Actividads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List T11Actividad', 'url'=>array('index')),
	array('label'=>'Create T11Actividad', 'url'=>array('create')),
	array('label'=>'View T11Actividad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage T11Actividad', 'url'=>array('admin')),
);
?>

<h1>Update T11Actividad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>