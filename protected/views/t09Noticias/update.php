<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */

$this->breadcrumbs=array(
	'T09 Noticiases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List T09Noticias', 'url'=>array('index')),
	array('label'=>'Create T09Noticias', 'url'=>array('create')),
	array('label'=>'View T09Noticias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage T09Noticias', 'url'=>array('admin')),
);
?>

<h1>Update T09Noticias <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>