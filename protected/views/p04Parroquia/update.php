<?php
/* @var $this P04ParroquiaController */
/* @var $model P04Parroquia */

$this->breadcrumbs=array(
	'P04 Parroquias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P04Parroquia', 'url'=>array('index')),
	array('label'=>'Create P04Parroquia', 'url'=>array('create')),
	array('label'=>'View P04Parroquia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P04Parroquia', 'url'=>array('admin')),
);
?>

<h1>Update P04Parroquia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>