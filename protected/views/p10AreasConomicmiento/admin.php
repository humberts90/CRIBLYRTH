<?php
/* @var $this P10AreasConomicmientoController */
/* @var $model P10AreasConomicmiento */

$this->breadcrumbs=array(
	'P10 Areas Conomicmientos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Nueva Areas de Conomicmiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#p10-areas-conomicmiento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Areas de Conomicmientos</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'p10-areas-conomicmiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'Nombre',
		array(
		'name'=>'P09_id',
		'header'=>'Departamento',
		'value'=>'$data->p09->Nombre',
		'filter'=>P10AreasConomicmiento::getListDepa(),
		),
		'Descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
