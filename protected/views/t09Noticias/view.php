<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */

$this->breadcrumbs=array(
	'T09 Noticiases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Noticias', 'url'=>array('index')),
	array('label'=>'Nueva Noticias', 'url'=>array('create')),
	array('label'=>'Actualizar Noticias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->Titulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		
		'Fecha',
		'Titulo',
		
		
	),
)); ?>
