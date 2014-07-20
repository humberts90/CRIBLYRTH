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
<h1> Histórico de Tesis Finalizadas</h1>
