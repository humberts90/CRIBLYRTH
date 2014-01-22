<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t03-acta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>


	<?php echo $form->errorSummary($model); ?>


	<div class="row">
			<?php
				Yii::import('ext.krichtexteditor.KRichTextEditor');
					$this->widget('KRichTextEditor', array(
					'model' => $model,
					'value' => $model->isNewRecord ? '' : $model->Descripcion,
					'attribute' => 'Descripcion',
					'options' => array(
					'theme_advanced_resizing' => 'true',
					'theme_advanced_statusbar_location' => 'bottom',
					),
				));
			?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'Anexo'); ?>
		<?php echo $form->fileField($model,'Anexo',array('rows'=>1, 'cols'=>50)); ?>
	    <?php echo $form->error($model,'Anexo'); ?>	
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
			<?php echo $form->error($model,'Fecha'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->