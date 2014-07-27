<?php
/* @var $this M05UsuarioController */
/* @var $dataProvider CActiveDataProvider */


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

<h1>Histórico de Tesis Finalizadas</h1>
<div style='overflow-x:scroll'>
<table border="0"  width="720px">
	 	
	 <tr>
	 <td bgcolor="#93AAD3" ><h4>&nbsp;Título</h4></td>
	 <td bgcolor="#93AAD3"><h4>Fecha de Inscipción</h4></td>
	 <td bgcolor="#93AAD3"><h4>Fecha de Aprobación</h4></td>
	 <td bgcolor="#93AAD3"><h4>Fecha de Defensa</h4></td>
	 <td bgcolor="#93AAD3"><h4>Proyecto</h4></td>
	 </tr>

		<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'view_tfin',
				'pager' => array(
							//'cssFile'=>Yii::app()->theme->baseUrl."/css/bootstrap.css",
							'htmlOptions'=>array(
									'class'=>'pagination'
							),
					
					),
		)); ?>	

</table>
</div>
</br>	

