<?php
/* @var $this P05MunicipioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P05 Municipios',
);

$this->menu=array(
	array('label'=>'Create P05Municipio', 'url'=>array('create')),
	array('label'=>'Manage P05Municipio', 'url'=>array('admin')),
);
?>

<h1>P05 Municipios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
