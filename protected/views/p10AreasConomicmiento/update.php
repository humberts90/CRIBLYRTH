<?php
/* @var $this P10AreasConomicmientoController */
/* @var $model P10AreasConomicmiento */

$this->breadcrumbs=array(
	'P10 Areas Conomicmientos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Nueva Areas de Conomicmiento', 'url'=>array('create')),
	array('label'=>'Detalles de Area de Conomicmiento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Areas de Conomicmiento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Areas Conomicmiento <?php echo $model->Nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>