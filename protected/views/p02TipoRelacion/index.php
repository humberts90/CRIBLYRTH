<?php
/* @var $this P02TipoRelacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P02 Tipo Relacions',
);

$this->menu=array(
	array('label'=>'Create P02TipoRelacion', 'url'=>array('create')),
	array('label'=>'Manage P02TipoRelacion', 'url'=>array('admin')),
);
?>

<h1>P02 Tipo Relacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
