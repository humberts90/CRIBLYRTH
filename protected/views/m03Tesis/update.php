<?php
/* @var $this M03TesisController */
/* @var $model M03Tesis */

$this->breadcrumbs=array(
	'M03 Tesises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M03Tesis', 'url'=>array('index')),
	array('label'=>'Create M03Tesis', 'url'=>array('create')),
	array('label'=>'View M03Tesis', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M03Tesis', 'url'=>array('admin')),
);
?>

<h1>Update M03Tesis <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>