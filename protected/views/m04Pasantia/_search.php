<?php
/* @var $this M04PasantiaController */
/* @var $model M04Pasantia */
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
		<?php echo $form->label($model,'Titulo'); ?>
		<?php echo $form->textField($model,'Titulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Planteamiento_Problema'); ?>
		<?php echo $form->textArea($model,'Planteamiento_Problema',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion_Trabajo'); ?>
		<?php echo $form->textArea($model,'Descripcion_Trabajo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Objetivo_General'); ?>
		<?php echo $form->textArea($model,'Objetivo_General',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Objetivo_Especifico'); ?>
		<?php echo $form->textArea($model,'Objetivo_Especifico',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Antecedentes'); ?>
		<?php echo $form->textArea($model,'Antecedentes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Metodologia'); ?>
		<?php echo $form->textArea($model,'Metodologia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Productos_Desarrollo'); ?>
		<?php echo $form->textArea($model,'Productos_Desarrollo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'M06_id'); ?>
		<?php echo $form->textField($model,'M06_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->