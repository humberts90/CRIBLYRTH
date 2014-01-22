<?php
/* @var $this M07TutorExternoController */
/* @var $model M07TutorExterno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m07-tutor-externo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

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
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cargo_Empresa'); ?>
		<?php echo $form->textField($model,'Cargo_Empresa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Cargo_Empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Curriculum'); ?>
		<?php echo $form->textField($model,'Curriculum',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Curriculum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Enlace'); ?>
		<?php echo $form->textField($model,'Enlace',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Enlace'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->