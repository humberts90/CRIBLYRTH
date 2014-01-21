<?php
/* @var $this M03TesisController */
/* @var $model M03Tesis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m03-tesis-form',
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
		<?php echo $form->textField($model,'Titulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Carta_Tutor'); ?>
		<?php echo $form->textField($model,'Carta_Tutor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Carta_Tutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Introduccion'); ?>
		<?php echo $form->textArea($model,'Introduccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Introduccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Planteamiento_Problema'); ?>
		<?php echo $form->textArea($model,'Planteamiento_Problema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Planteamiento_Problema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Objetivo_General'); ?>
		<?php echo $form->textArea($model,'Objetivo_General',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Objetivo_General'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Objetivo_especifico'); ?>
		<?php echo $form->textArea($model,'Objetivo_especifico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Objetivo_especifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Justificacion_Importancia'); ?>
		<?php echo $form->textArea($model,'Justificacion_Importancia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Justificacion_Importancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alcance_Delimitaciones'); ?>
		<?php echo $form->textArea($model,'Alcance_Delimitaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Alcance_Delimitaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Antecedentes'); ?>
		<?php echo $form->textArea($model,'Antecedentes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Antecedentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bases_Teoricas'); ?>
		<?php echo $form->textArea($model,'Bases_Teoricas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Bases_Teoricas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bases_Legales'); ?>
		<?php echo $form->textArea($model,'Bases_Legales',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Bases_Legales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Definicion_Terminos'); ?>
		<?php echo $form->textArea($model,'Definicion_Terminos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Definicion_Terminos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Enfoque_Investigacion'); ?>
		<?php echo $form->textArea($model,'Enfoque_Investigacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Enfoque_Investigacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Nivel_Invesstigacion'); ?>
		<?php echo $form->textArea($model,'Tipo_Nivel_Invesstigacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Tipo_Nivel_Invesstigacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Diseno_Investigacion'); ?>
		<?php echo $form->textArea($model,'Diseno_Investigacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Diseno_Investigacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Poblacion_Muestra'); ?>
		<?php echo $form->textArea($model,'Poblacion_Muestra',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Poblacion_Muestra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tecnicas_Recoleccion_Datos'); ?>
		<?php echo $form->textArea($model,'Tecnicas_Recoleccion_Datos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Tecnicas_Recoleccion_Datos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Metodologias'); ?>
		<?php echo $form->textArea($model,'Metodologias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Metodologias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referencias'); ?>
		<?php echo $form->textArea($model,'Referencias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Referencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Inscripcion'); ?>
		<?php echo $form->textField($model,'Fecha_Inscripcion'); ?>
		<?php echo $form->error($model,'Fecha_Inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Aprobación'); ?>
		<?php echo $form->textField($model,'Fecha_Aprobación'); ?>
		<?php echo $form->error($model,'Fecha_Aprobación'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Defensa'); ?>
		<?php echo $form->textField($model,'Fecha_Defensa'); ?>
		<?php echo $form->error($model,'Fecha_Defensa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->