<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t11-actividad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<label>Nombre de la actividad:</label>
							<?php echo $form->textField($model_3,'Descripcion',array('size'=>50,'maxlength'=>12)); ?>
							<?php echo $form->error($model_3,'Descripcion'); ?>
						<br>
						<?php echo $form->labelEx($model_3,'Fecha de Inicio:'); ?>
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model_3,
					'attribute'=>'Fecha_inicio',
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
		<?php echo $form->error($model_3,'Fecha_inicio'); ?>
	
					    <br>	
							<?php echo $form->labelEx($model_3,'Fecha Fin:'); ?>
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model_3,
					'attribute'=>'Fecha_Fin',
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
		<?php echo $form->error($model_3,'Fecha_Fin'); ?>
	
					<br>
					<br>
					
		<?php echo CHtml::submitButton($model_3->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	
	
	<?php $this->endWidget(); ?>