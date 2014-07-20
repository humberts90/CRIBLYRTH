<?php
/* @var $this M06EmpresaController */
/* @var $model_1 M06Empresa */
/* @var $form CActiveForm */
?>

	
	<div class="row">
		<?php echo $form->label($model_1,'RIF'); ?>
		<?php echo $form->textField($model_1,'RIF',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model_1,'RIF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Razon_Social'); ?>
		<?php echo $form->textField($model_1,'Razon_Social',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model_1,'Razon_Social'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Direccion'); ?>
		<?php echo $form->textArea($model_1,'Direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model_1,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Telefono_1'); ?>
		<?php echo $form->textField($model_1,'Telefono_1',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model_1,'Telefono_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Fax'); ?>
		<?php echo $form->textField($model_1,'Fax',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model_1,'Fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Correo'); ?>
		<?php echo $form->textField($model_1,'Correo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model_1,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Descripcion'); ?>
		<?php echo $form->textArea($model_1,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model_1,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_1,'Sitio_Web'); ?>
		<?php echo $form->textField($model_1,'Sitio_Web',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model_1,'Sitio_Web'); ?>
	</div>

		<div class="row">
			<?php echo $form->dropDownList($model_1,'P06_id',CHtml::listData(P06Estado::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Estado','class'=>'form-control')); ?>
			<?php echo $form->error($model_1,'P06_id'); ?>
			<?php echo $form->error($model_1,'P06_id'); ?>
	</div>

	<div class="row">
			<?php echo $form->dropDownList($model_1,'P07_id',CHtml::listData(P07Pais::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Pais','class'=>'form-control')); ?>
			<?php echo $form->error($model_1,'P07_id'); ?>
			<?php echo $form->error($model_1,'P07_id'); ?>
	</div>

	





</div><!-- search-form -->
