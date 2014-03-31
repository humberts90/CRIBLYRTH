<?php
/* @var $this P09DepartamentoController */
/* @var $model P09Departamento */

$this->breadcrumbs=array(
	'P09 Departamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(

	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Departamentos', 'url'=>array('index')),
	array('label'=>'Nuevo Departamento', 'url'=>array('create')),
	array('label'=>'Detalles del Departamento', 'url'=>array('view', 'id'=>$model->id)),	
	array('label'=>'Administrar Departamentos', 'url'=>array('admin')),
);
?>

<h1>Update Departamento <?php echo $model->Nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>