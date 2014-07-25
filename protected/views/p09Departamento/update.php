<?php
/* @var $this P09DepartamentoController */
/* @var $model P09Departamento */

$this->breadcrumbs=array(
	'P09 Departamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P09Departamento', 'url'=>array('index')),
	array('label'=>'Create P09Departamento', 'url'=>array('create')),
	array('label'=>'View P09Departamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P09Departamento', 'url'=>array('admin')),
);
?>

<h1>Update P09Departamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>