<?php
/* @var $this T11ActividadController */
/* @var $model T11Actividad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_inicio'); ?>
		<?php echo $form->textField($model,'Fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Fin'); ?>
		<?php echo $form->textField($model,'Fecha_Fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'M02_id'); ?>
		<?php echo $form->textField($model,'M02_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->