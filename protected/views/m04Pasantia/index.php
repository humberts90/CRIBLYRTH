<?php
/* @var $this M04PasantiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M04 Pasantias',
);

$this->menu=array(
	array('label'=>'Create M04Pasantia', 'url'=>array('create')),
	array('label'=>'Manage M04Pasantia', 'url'=>array('admin')),
);
?>

<h1>M04 Pasantias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
