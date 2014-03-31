<?php
/* @var $this P10AreasConomicmientoController */
/* @var $model P10AreasConomicmiento */

$this->breadcrumbs=array(
	'P10 Areas Conomicmientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Administar Areas de Conomicmiento', 'url'=>array('admin')),
);
?>

<h1>Nueva Areas de Conomicmiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>