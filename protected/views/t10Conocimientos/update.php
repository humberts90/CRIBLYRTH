<?php
/* @var $this T10ConocimientosController */
/* @var $model T10Conocimientos */

$this->breadcrumbs=array(
	'T10 Conocimientoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List T10Conocimientos', 'url'=>array('index')),
	array('label'=>'Create T10Conocimientos', 'url'=>array('create')),
	array('label'=>'View T10Conocimientos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage T10Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Update T10Conocimientos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>