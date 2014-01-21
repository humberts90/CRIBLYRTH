<?php
/* @var $this M01ProfesorController */
/* @var $model M01Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m01-profesor-form',
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
		<?php echo $form->labelEx($model,'Correo_UNET'); ?>
		<?php echo $form->textField($model,'Correo_UNET',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Correo_UNET'); ?>
	</div>
	
	<?php 
	
	echo "<label>TEMAS:<label><br/>";
	
	$modelTema = M02Tematica::model()->findAll();
	
	foreach($modelTema as $tema)
	{
	?>
	
	<div class="row">
	<?php echo $form->labelEx($model,$tema->Descripcion); ?>
	<?php echo $form->checkBox($tema,'Descripcion',array('name'=>'Tema['.$tema->id.']')); ?>
	</div>
	
	<?php
	}
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->