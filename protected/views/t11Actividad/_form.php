<?php
/* @var $this T11ActividadController */
/* @var $model T11Actividad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t11-actividad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pasantia'); ?>
		<?php echo $form->dropDownList($model,'M04_Pasantia_id',CHtml::listData(M04Pasantia::model()->findAll(),'id','Titulo'),array('empty'=>'Seleccione Pasantia','class'=>'form-control')); ?>
		<?php echo $form->error($model,'M04_Pasantia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_inicio'); ?>
		<?php echo $form->textField($model,'Fecha_inicio'); ?>
		<?php echo $form->error($model,'Fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Fin'); ?>
		<?php echo $form->textField($model,'Fecha_Fin'); ?>
		<?php echo $form->error($model,'Fecha_Fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->