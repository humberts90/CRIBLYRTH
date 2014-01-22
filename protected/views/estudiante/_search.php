<?php
/* @var $this M06EmpresaController */
/* @var $model_1 M06Empresa */
/* @var $form CActiveForm */
?>

	
	<div class="row">
		<?php echo $form->label($model_1,'RIF'); ?>
		<?php echo $form->textField($model_1,'RIF',array('size'=>25,'maxlength'=>25)); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model_1,'Razon_Social'); ?>
		<?php echo $form->textField($model_1,'Razon_Social',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Direccion'); ?>
		<?php echo $form->textArea($model_1,'Direccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Telefono_1'); ?>
		<?php echo $form->textField($model_1,'Telefono_1',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Telefono_2'); ?>
		<?php echo $form->textField($model_1,'Telefono_2',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Fax'); ?>
		<?php echo $form->textField($model_1,'Fax',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Correo'); ?>
		<?php echo $form->textField($model_1,'Correo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Descripcion'); ?>
		<?php echo $form->textArea($model_1,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Sitio_Web'); ?>
		<?php echo $form->textField($model_1,'Sitio_Web',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
			<?php echo $form->dropDownList($model_1,'P04_id',CHtml::listData(P04Parroquia::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Parroquia','class'=>'form-control')); ?>
			<?php echo $form->error($model_1,'P04_id'); ?>
	</div>

	





</div><!-- search-form -->
