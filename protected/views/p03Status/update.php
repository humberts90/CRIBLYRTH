<?php
/* @var $this P03StatusController */
/* @var $model P03Status */

$this->breadcrumbs=array(
	'P03 Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Status', 'url'=>array('index')),
	array('label'=>'Nuevo Status', 'url'=>array('create')),
	array('label'=>'Detalle del Status', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>Administrar Status <?php echo $model->Descripcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>