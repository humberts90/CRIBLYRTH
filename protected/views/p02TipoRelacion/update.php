<?php
/* @var $this P02TipoRelacionController */
/* @var $model P02TipoRelacion */

$this->breadcrumbs=array(
	'P02 Tipo Relacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P02TipoRelacion', 'url'=>array('index')),
	array('label'=>'Create P02TipoRelacion', 'url'=>array('create')),
	array('label'=>'View P02TipoRelacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P02TipoRelacion', 'url'=>array('admin')),
);
?>

<h1>Update P02TipoRelacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>