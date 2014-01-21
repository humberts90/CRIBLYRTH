<?php
/* @var $this P07PaisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'P07 Paises',
);

$this->menu=array(
	array('label'=>'Create P07Pais', 'url'=>array('create')),
	array('label'=>'Manage P07Pais', 'url'=>array('admin')),
);
?>

<h1>P07 Paises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
