<?php
/* @var $this M06EmpresaController */
/* @var $model M06Empresa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'Status de la empresa'); ?>
		<?php echo $form->dropDownList($model,'P08_id',CHtml::listData(P08Categoria::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Status de la empresa','class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'RIF'); ?>
		<?php echo $form->textField($model,'RIF',array('size'=>25,'maxlength'=>25)); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model,'Razon_Social'); ?>
		<?php echo $form->textField($model,'Razon_Social',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textArea($model,'Direccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono_1'); ?>
		<?php echo $form->textField($model,'Telefono_1',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono_2'); ?>
		<?php echo $form->textField($model,'Telefono_2',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fax'); ?>
		<?php echo $form->textField($model,'Fax',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sitio_Web'); ?>
		<?php echo $form->textField($model,'Sitio_Web',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pais'); ?>
		<?php echo $form->dropDownList($model,'P07_id',CHtml::listData(P07Pais::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Pais','class'=>'form-control')); ?>
		<?php echo $form->error($model,'Pais'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->dropDownList($model,'P06_id',CHtml::listData(P06Estado::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Estado','class'=>'form-control')); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>
		<div class="row">
		<?php echo $form->labelEx($model,'Municipio'); ?>
		<?php echo $form->dropDownList($model,'P05_id',CHtml::listData(P05Municipio::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Municipio','class'=>'form-control')); ?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Parroquia'); ?>
		<?php echo $form->dropDownList($model,'P04_id',CHtml::listData(P04Parroquia::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Parroquia','class'=>'form-control')); ?>
		<?php echo $form->error($model,'Parroquia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->