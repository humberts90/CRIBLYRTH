<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P11Conocimientos', 'url'=>array('index')),
	array('label'=>'Create P11Conocimientos', 'url'=>array('create')),
	array('label'=>'View P11Conocimientos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P11Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Update P11Conocimientos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>