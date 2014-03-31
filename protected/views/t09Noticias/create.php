<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */

$this->breadcrumbs=array(
	'T09 Noticiases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Noticias', 'url'=>array('index')),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1>Nueva Noticia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>