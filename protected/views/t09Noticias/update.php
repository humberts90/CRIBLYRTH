<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */

$this->breadcrumbs=array(
	'T09 Noticiases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(

	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Noticias', 'url'=>array('index')),
	array('label'=>'Nueva Noticias', 'url'=>array('create')),
	array('label'=>'Detallar Noticias', 'url'=>array('view', 'id'=>$model->id)),	
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->Titulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>