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
<h2> Resultados de la búsqueda </h2> 
<div  style='overflow-x:scroll'>

<table border="0" width="720px" >

	 <tr>
	 <td bgcolor="#93AAD3"><h4>Cédula</h4></td>
	 <td bgcolor="#93AAD3"><h4>Nombre Completo</h4></td>
	  <td bgcolor="#93AAD3"><h4>Teléfono</h4></td>
	 <td bgcolor="#93AAD3"><h4>Correo Electrónico</h4></td>
	 <td bgcolor="#93AAD3"><h4>Proyecto</h4></td>
	</tr>

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

		</table>
	</br>			
</div>
