<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t09-noticias-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
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
		<?php echo $form->error($model,'Descripcion'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Subir' : 'Modificar'); ?>
	</div>
<?php $this->endWidget(); ?>

</div>
