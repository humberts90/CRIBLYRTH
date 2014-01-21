<?php
/* @var $this M07TutorExternoController */
/* @var $model M07TutorExterno */

$this->breadcrumbs=array(
	'M07 Tutor Externos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List M07TutorExterno', 'url'=>array('index')),
	array('label'=>'Manage M07TutorExterno', 'url'=>array('admin')),
);
?>

<h1>Create M07TutorExterno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>