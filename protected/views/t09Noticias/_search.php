<?php
/* @var $this T09NoticiasController */
/* @var $model T09Noticias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	



	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
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
		<?php echo $form->label($model,'Titulo'); ?>
		<?php echo $form->textField($model,'Titulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>



	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->