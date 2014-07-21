<?php
/* @var $this P10EjeCurricularController */
/* @var $model P10EjeCurricular */

$this->breadcrumbs=array(
	'P10 Eje Curriculars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P10EjeCurricular', 'url'=>array('index')),
	array('label'=>'Create P10EjeCurricular', 'url'=>array('create')),
	array('label'=>'View P10EjeCurricular', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P10EjeCurricular', 'url'=>array('admin')),
);
?>

<h1>Update P10EjeCurricular <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>