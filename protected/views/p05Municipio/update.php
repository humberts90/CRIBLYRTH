<?php
/* @var $this P05MunicipioController */
/* @var $model P05Municipio */

$this->breadcrumbs=array(
	'P05 Municipios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P05Municipio', 'url'=>array('index')),
	array('label'=>'Create P05Municipio', 'url'=>array('create')),
	array('label'=>'View P05Municipio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P05Municipio', 'url'=>array('admin')),
);
?>

<h1>Update P05Municipio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>