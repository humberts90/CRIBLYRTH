<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */

$this->breadcrumbs=array(
	'T09 Noticiases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List T09Noticias', 'url'=>array('index')),
	array('label'=>'Manage T09Noticias', 'url'=>array('admin')),
);
?>

<h1>Create T09Noticias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>