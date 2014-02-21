<?php
/* @var $this P03StatusController */
/* @var $model P03Status */

$this->breadcrumbs=array(
	'P03 Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Status', 'url'=>array('index')),
	array('label'=>'Nuevo Status', 'url'=>array('create')),
	array('label'=>'Actualizar Status', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>Detalles Status <?php echo $model->Descripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'Descripcion',
	),
)); ?>
