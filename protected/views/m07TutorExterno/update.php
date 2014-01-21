<?php
/* @var $this M07TutorExternoController */
/* @var $model M07TutorExterno */

$this->breadcrumbs=array(
	'M07 Tutor Externos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List M07TutorExterno', 'url'=>array('index')),
	array('label'=>'Create M07TutorExterno', 'url'=>array('create')),
	array('label'=>'View M07TutorExterno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage M07TutorExterno', 'url'=>array('admin')),
);
?>

<h1>Update M07TutorExterno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>