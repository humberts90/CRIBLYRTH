<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */

$this->breadcrumbs=array(
	'T09 Noticiases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List T09Noticias', 'url'=>array('index')),
	array('label'=>'Create T09Noticias', 'url'=>array('create')),
	array('label'=>'Update T09Noticias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete T09Noticias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage T09Noticias', 'url'=>array('admin')),
);
?>

<h1>View T09Noticias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'Titulo',
	),
)); ?>
