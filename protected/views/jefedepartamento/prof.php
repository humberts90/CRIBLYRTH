<?php
/* @var $this M05UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inicio',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario));


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
<h1> Listado de profesores </h1>
<div style='overflow-x:scroll'>


	<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->


	<table border="0" width="640px">
	  <tr>
	    <td bgcolor="#93AAD3"><h4>Cédula</h4></td>
	    <td bgcolor="#93AAD3"><h4>Nombre Completo</h4></td>
	    <td bgcolor="#93AAD3"><h4>Correo Electronico</h4></td>
	    <td bgcolor="#93AAD3"><h4>Detalles</h4></td>
	   

	  </tr>
	 	<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'view_p',
					'pager' => array(
								//'cssFile'=>Yii::app()->theme->baseUrl."/css/bootstrap.css",
								'htmlOptions'=>array(
										'class'=>'pagination'
								),
						
						),
			)); ?>
	</table>
	</br>
					
</div>