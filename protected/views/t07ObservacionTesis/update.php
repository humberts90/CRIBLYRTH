<?php
/* @var $this T07ObservacionTesisController */
/* @var $model T07ObservacionTesis */

$this->breadcrumbs=array(
	'T07 Observacion Tesises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List T07ObservacionTesis', 'url'=>array('index')),
	array('label'=>'Create T07ObservacionTesis', 'url'=>array('create')),
	array('label'=>'View T07ObservacionTesis', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage T07ObservacionTesis', 'url'=>array('admin')),
);
?>

<h1>Update T07ObservacionTesis <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>