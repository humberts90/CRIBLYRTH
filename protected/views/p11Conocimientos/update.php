<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Nueva Areas de Conomicmiento', 'url'=>array('create')),
	array('label'=>'Detalle del Conocimiento', 'url'=>array('view', 'id'=>$model->id)),	
	array('label'=>'Administrar Areas de Conomicmiento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Conocimiento <?php echo $model->Nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>