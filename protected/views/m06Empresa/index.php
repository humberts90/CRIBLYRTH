<?php
/* @var $this M06EmpresaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empresas',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/admin')),
	array('label'=>'Nueva Empresa', 'url'=>array('create')),
	array('label'=>'Administar Empresa', 'url'=>array('admin')),
);
?>

<h1> Empresas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
