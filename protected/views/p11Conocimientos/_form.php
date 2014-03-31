<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'p11-conocimientos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'Area de Conocimiento'); ?>
		<?php echo $form->dropDownList($model,'P10_id',CHtml::listData(P10AreasConomicmiento::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Area de Conocimiento','class'=>'form-control')); ?>
		<?php echo $form->error($model,'P10_id'); ?>
	</div>
</br>
	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
	</br>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->