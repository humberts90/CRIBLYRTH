<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P11Conocimientos', 'url'=>array('index')),
	array('label'=>'Manage P11Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Create P11Conocimientos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>