<?php
/* @var $this P07PaisController */
/* @var $model P07Pais */

$this->breadcrumbs=array(
	'P07 Paises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List P07Pais', 'url'=>array('index')),
	array('label'=>'Create P07Pais', 'url'=>array('create')),
	array('label'=>'View P07Pais', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage P07Pais', 'url'=>array('admin')),
);
?>

<h1>Update P07Pais <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>