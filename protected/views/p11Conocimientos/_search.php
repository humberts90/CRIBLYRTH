<?php
/* @var $this P11ConocimientosController */
/* @var $model P11Conocimientos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'Area de Conocimiento'); ?>
		<?php echo $form->dropDownList($model,'P10_id',CHtml::listData(P10AreasConomicmiento::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Area de Conocimiento','class'=>'form-control')); ?>
		<?php echo $form->error($model,'P10_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->