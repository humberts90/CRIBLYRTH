<?php

	
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Noticias del sistema'=>array('noti'),
	'Administracion de noticias'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#t09-noticias-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administracion de noticias</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search_nt',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'t09-noticias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Descripcion',
		'Fecha',
		array(
			'class'=>'CButtonColumn',
				'viewButtonUrl'=>'Yii::app()->createUrl("/comision/noticia?id=$data->id" )',
			 'deleteButtonUrl'=>'Yii::app()->createUrl("/comision/delete_nt?id=$data->id" )', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar la noticia ?', 
			'updateButtonUrl'=>'Yii::app()->createUrl("/comision/update_nt?id=$data->id" )',
		),
	),
)); ?>
