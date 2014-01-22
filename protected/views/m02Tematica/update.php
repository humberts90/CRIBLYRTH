<?php
/* @var $this M02TematicaController */
/* @var $model M02Tematica */

$this->breadcrumbs=array(
	'M02 Tematicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M02Tematica', 'url'=>array('index')),
	array('label'=>'Create M02Tematica', 'url'=>array('create')),
	array('label'=>'View M02Tematica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M02Tematica', 'url'=>array('admin')),
);
?>

<h1>Update M02Tematica <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>