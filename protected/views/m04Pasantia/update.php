<?php
/* @var $this M04PasantiaController */
/* @var $model M04Pasantia */

$this->breadcrumbs=array(
	'M04 Pasantias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M04Pasantia', 'url'=>array('index')),
	array('label'=>'Create M04Pasantia', 'url'=>array('create')),
	array('label'=>'View M04Pasantia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M04Pasantia', 'url'=>array('admin')),
);
?>

<h1>Update M04Pasantia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>