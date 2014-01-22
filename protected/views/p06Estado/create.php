<?php
/* @var $this P06EstadoController */
/* @var $model P06Estado */

$this->breadcrumbs=array(
	'P06 Estados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List P06Estado', 'url'=>array('index')),
	array('label'=>'Manage P06Estado', 'url'=>array('admin')),
);
?>

<h1>Create P06Estado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>