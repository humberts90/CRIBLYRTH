<?php
/* @var $this P10AreasConomicmientoController */
/* @var $model P10AreasConomicmiento */
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
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'Pertenece al Departamento:'); ?>
	<?php echo $form->dropDownList($model,'P09_id',CHtml::listData(P09Departamento::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Departamento','class'=>'form-control')); ?>
		<?php echo $form->error($model,'P09_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->