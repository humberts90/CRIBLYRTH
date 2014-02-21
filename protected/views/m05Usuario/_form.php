<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m05-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

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
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clave'); ?>
		<?php echo $form->textField($model,'Clave',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo_Electronico'); ?>
		<?php echo $form->textField($model,'Correo_Electronico',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Correo_Electronico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textArea($model,'Direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Unidades_Credito_Aprobadas'); ?>
		<?php echo $form->textField($model,'Unidades_Credito_Aprobadas'); ?>
		<?php echo $form->error($model,'Unidades_Credito_Aprobadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servicio_Comunitario'); ?>
		<?php echo $form->textField($model,'Servicio_Comunitario'); ?>
		<?php echo $form->error($model,'Servicio_Comunitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ultimo_Lapso_Academico'); ?>
		<?php echo $form->textField($model,'Ultimo_Lapso_Academico',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'Ultimo_Lapso_Academico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	
	<?php 
	
	echo "<label>ROLES:<label><br/>";
	
	$modelRol = P01Rol::model()->findAll();
	
	foreach($modelRol as $rol)
	{
	?>
	
	<div class="row">
	<?php echo $form->labelEx($model,$rol->nombre); ?>
	<?php echo $form->checkBox($rol,'nombre',array('name'=>'Rol['.$rol->id.']')); ?>
	</div>
	
	<?php
	}
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->