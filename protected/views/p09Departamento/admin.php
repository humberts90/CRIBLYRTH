<?php
/* @var $this P09DepartamentoController */
/* @var $model P09Departamento */

$this->breadcrumbs=array(
	'P09 Departamentos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Departamentos', 'url'=>array('index')),
	array('label'=>'Nuevo Departamento', 'url'=>array('create')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#p09-departamento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Departamentos</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'p09-departamento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'Nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
