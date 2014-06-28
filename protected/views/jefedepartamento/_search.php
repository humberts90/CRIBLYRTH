<?php
/* @var $this AvisoController */
/* @var $model Aviso */
/* @var $form CActiveForm */
?>
<h3> Búsqueda avanzada </h3>

		<?php $form=$this->beginWidget('CActiveForm', array(
			'action'=>Yii::app()->createUrl($this->route),
				'htmlOptions' => array('enctype' => 'multipart/form-data'),
			'method'=>'POST',

		)); ?>
	<?php 
	$criteria= new CDbCriteria;
	$criteria->order='Nombre ASC';
	?>
		<div class="form-group">
			<?php echo $form->label($model,'Nombre'); ?>
			<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?>
		</div>	
			<div class="form-group">
			<?php echo $form->label($model,'Correo_UNET'); ?>
			<?php echo $form->textField($model,'Correo_UNET',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?>
		</div>	
			<div class="form-group">
			<?php echo $form->label($model,'Cedula'); ?>
			<?php echo $form->textField($model,'Cedula',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?>
		</div>		
	
	
	
		
	
		<div class="row buttons">
			<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-danger pull-right')); ?>
		</div>
	
	<?php $this->endWidget(); ?>


