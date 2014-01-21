<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */

$this->breadcrumbs=array(
	'T03 Actas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List T03Acta', 'url'=>array('index')),
	array('label'=>'Create T03Acta', 'url'=>array('create')),
	array('label'=>'View T03Acta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage T03Acta', 'url'=>array('admin')),
);
?>

<h1>Update T03Acta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>