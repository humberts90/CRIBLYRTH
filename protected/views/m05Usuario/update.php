<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */

$this->breadcrumbs=array(
	'M05 Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M05Usuario', 'url'=>array('index')),
	array('label'=>'Create M05Usuario', 'url'=>array('create')),
	array('label'=>'View M05Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M05Usuario', 'url'=>array('admin')),
);
?>

<h1>Update M05Usuario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>