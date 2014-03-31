<?php
/* @var $this P10AreasConomicmientoController */
/* @var $model P10AreasConomicmiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'p10-areas-conomicmiento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pertenece al Departamento:'); ?>
	<?php echo $form->dropDownList($model,'P09_id',CHtml::listData(P09Departamento::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Departamento','class'=>'form-control')); ?>
		<?php echo $form->error($model,'P09_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->