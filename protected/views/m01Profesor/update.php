<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M01Profesor', 'url'=>array('index')),
	array('label'=>'Create M01Profesor', 'url'=>array('create')),
	array('label'=>'View M01Profesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M01Profesor', 'url'=>array('admin')),
);
?>

<h1>Update M01Profesor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>