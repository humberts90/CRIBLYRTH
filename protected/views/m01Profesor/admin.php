<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */

$this->breadcrumbs=array(
	'M01 Profesors'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#m01-profesor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Profesores</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'m01-profesor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Correo_UNET',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
