<?php
/* @var $this T06ObservacionController */
/* @var $model T06Observacion */

$this->breadcrumbs=array(
	'T06 Observacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List T06Observacion', 'url'=>array('index')),
	array('label'=>'Create T06Observacion', 'url'=>array('create')),
	array('label'=>'View T06Observacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage T06Observacion', 'url'=>array('admin')),
);
?>

<h1>Update T06Observacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>