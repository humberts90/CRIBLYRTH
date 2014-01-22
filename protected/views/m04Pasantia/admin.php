<?php
/* @var $this M04PasantiaController */
/* @var $model M04Pasantia */

$this->breadcrumbs=array(
	'M04 Pasantias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List M04Pasantia', 'url'=>array('index')),
	array('label'=>'Create M04Pasantia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#m04-pasantia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage M04 Pasantias</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'m04-pasantia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Titulo',
		'Planteamiento_Problema',
		'Descripcion_Trabajo',
		'Objetivo_General',
		'Objetivo_Especifico',
		/*
		'Antecedentes',
		'Metodologia',
		'Productos_Desarrollo',
		'M06_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
