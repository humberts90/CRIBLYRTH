<?php
/* @var $this M06EmpresaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M06 Empresas',
);

$this->menu=array(
	array('label'=>'Create M06Empresa', 'url'=>array('create')),
	array('label'=>'Manage M06Empresa', 'url'=>array('admin')),
);
?>

<h1>M06 Empresas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
