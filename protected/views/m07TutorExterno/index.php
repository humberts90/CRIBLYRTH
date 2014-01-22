<?php
/* @var $this M07TutorExternoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'M07 Tutor Externos',
);

$this->menu=array(
	array('label'=>'Create M07TutorExterno', 'url'=>array('create')),
	array('label'=>'Manage M07TutorExterno', 'url'=>array('admin')),
);
?>

<h1>M07 Tutor Externos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
