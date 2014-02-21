<?php
/* @var $this P09DepartamentoController */
/* @var $model P09Departamento */

$this->breadcrumbs=array(
	'P09 Departamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Departamentos', 'url'=>array('index')),	
	array('label'=>'Administrar Departamentos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Departamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>