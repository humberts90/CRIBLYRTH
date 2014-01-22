<?php
/* @var $this M04PasantiaController */
/* @var $model M04Pasantia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m04-pasantia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Titulo'); ?>
		<?php echo $form->textField($model,'Titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Planteamiento_Problema'); ?>
		<?php echo $form->textArea($model,'Planteamiento_Problema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Planteamiento_Problema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion_Trabajo'); ?>
		<?php echo $form->textArea($model,'Descripcion_Trabajo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion_Trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Objetivo_General'); ?>
		<?php echo $form->textArea($model,'Objetivo_General',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Objetivo_General'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Objetivo_Especifico'); ?>
		<?php echo $form->textArea($model,'Objetivo_Especifico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Objetivo_Especifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Antecedentes'); ?>
		<?php echo $form->textArea($model,'Antecedentes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Antecedentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Metodologia'); ?>
		<?php echo $form->textArea($model,'Metodologia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Metodologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Productos_Desarrollo'); ?>
		<?php echo $form->textArea($model,'Productos_Desarrollo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Productos_Desarrollo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa'); ?>
		<?php echo $form->dropDownList($model,'P07_id',CHtml::listData(M06Empresa::model()->findAll(),'id','Razon_Social'),array('empty'=>'Seleccione Empresa','class'=>'form-control')); ?>
		<?php echo $form->error($model,'M06_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->