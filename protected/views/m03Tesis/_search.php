<?php
/* @var $this M03TesisController */
/* @var $model M03Tesis */
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
		<?php echo $form->textField($model,'Titulo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Carta_Tutor'); ?>
		<?php echo $form->textField($model,'Carta_Tutor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Introduccion'); ?>
		<?php echo $form->textArea($model,'Introduccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Planteamiento_Problema'); ?>
		<?php echo $form->textArea($model,'Planteamiento_Problema',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Objetivo_General'); ?>
		<?php echo $form->textArea($model,'Objetivo_General',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Objetivo_especifico'); ?>
		<?php echo $form->textArea($model,'Objetivo_especifico',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Justificacion_Importancia'); ?>
		<?php echo $form->textArea($model,'Justificacion_Importancia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Alcance_Delimitaciones'); ?>
		<?php echo $form->textArea($model,'Alcance_Delimitaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Antecedentes'); ?>
		<?php echo $form->textArea($model,'Antecedentes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bases_Teoricas'); ?>
		<?php echo $form->textArea($model,'Bases_Teoricas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bases_Legales'); ?>
		<?php echo $form->textArea($model,'Bases_Legales',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Definicion_Terminos'); ?>
		<?php echo $form->textArea($model,'Definicion_Terminos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Enfoque_Investigacion'); ?>
		<?php echo $form->textArea($model,'Enfoque_Investigacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_Nivel_Invesstigacion'); ?>
		<?php echo $form->textArea($model,'Tipo_Nivel_Invesstigacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Diseno_Investigacion'); ?>
		<?php echo $form->textArea($model,'Diseno_Investigacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Poblacion_Muestra'); ?>
		<?php echo $form->textArea($model,'Poblacion_Muestra',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tecnicas_Recoleccion_Datos'); ?>
		<?php echo $form->textArea($model,'Tecnicas_Recoleccion_Datos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Metodologias'); ?>
		<?php echo $form->textArea($model,'Metodologias',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Referencias'); ?>
		<?php echo $form->textArea($model,'Referencias',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Inscripcion'); ?>
		<?php echo $form->textField($model,'Fecha_Inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Aprobación'); ?>
		<?php echo $form->textField($model,'Fecha_Aprobación'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Defensa'); ?>
		<?php echo $form->textField($model,'Fecha_Defensa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->