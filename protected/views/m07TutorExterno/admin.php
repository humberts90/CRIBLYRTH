<?php
/* @var $this M07TutorExternoController */
/* @var $model M07TutorExterno */

$this->breadcrumbs=array(
	'M07 Tutor Externos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List M07TutorExterno', 'url'=>array('index')),
	array('label'=>'Create M07TutorExterno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#m07-tutor-externo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage M07 Tutor Externos</h1>

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
	'id'=>'m07-tutor-externo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Cedula',
		'Apellido',
		'Nombre',
		'Telefono',
		'Correo',
		/*
		'Cargo_Empresa',
		'Curriculum',
		'Enlace',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
