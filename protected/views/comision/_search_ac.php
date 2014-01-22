<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */
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
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'Fecha'); ?>
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model,
					'attribute'=>'Fecha',
					'language'=>'es',
					'options'=>array( 
							'dateFormat'=>'yy-mm-dd',
							'constrainInput'=>'fast',
							'showAnim'=>'slide',							
							'changeMonth' => 'true',
							'changeYear' => 'true',
									),
					)				
			);			
			?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Anexo'); ?>
		<?php echo $form->textField($model,'Anexo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->