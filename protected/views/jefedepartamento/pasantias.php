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
<h1> Listado de Pasantes</h1>





<div class="col-lg-8">


	<h2> Resultados de la búsqueda </h2>
		<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'view_pp',
				'pager' => array(
							//'cssFile'=>Yii::app()->theme->baseUrl."/css/bootstrap.css",
							'htmlOptions'=>array(
									'class'=>'pagination'
							),
					
					),
		)); ?>				
</div>
