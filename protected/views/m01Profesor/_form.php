<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m01-profesor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Todos los campos con  <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo_UNET'); ?>
		<?php echo $form->textField($model,'Correo_UNET',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Correo_UNET'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->