<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */

$this->breadcrumbs=array(
	'P11 Conocimientoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Lista de Areas de Conomicmiento', 'url'=>array('index')),
	array('label'=>'Nuevo Conocimiento', 'url'=>array('create')),	
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#p11-conocimientos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Conocimientos</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'p11-conocimientos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'Nombre',
		array(
		'name'=>'P10_id',
		'header'=>'Area de Conocimiento',
		'value'=>'$data->p10->Nombre',
		'filter'=>P11Conocimientos::getListCono(),
		),
		'Descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
