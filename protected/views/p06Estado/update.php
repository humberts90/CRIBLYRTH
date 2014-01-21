<?php
/* @var $this P06EstadoController */
/* @var $model P06Estado */

$this->breadcrumbs=array(
	'P06 Estados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P06Estado', 'url'=>array('index')),
	array('label'=>'Create P06Estado', 'url'=>array('create')),
	array('label'=>'View P06Estado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P06Estado', 'url'=>array('admin')),
);
?>

<h1>Update P06Estado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>