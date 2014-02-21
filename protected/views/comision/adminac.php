<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Modulo de actas'=> array('acta'),
	'Nueva acta',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#t03-acta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administracion de Actas</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search_ac',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'t03-acta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	
		'Fecha',
		'Anexo',
		array(
			'class'=>'CButtonColumn',
			'viewButtonUrl'=>'Yii::app()->createUrl("/comision/view_ac?id=$data->id" )',
			 'deleteButtonUrl'=>'Yii::app()->createUrl("/comision/delete_ac?id=$data->id" )', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el acta ?', 
			'updateButtonUrl'=>'Yii::app()->createUrl("/comision/update_ac?id=$data->id" )',

		),
	),
)); ?>
