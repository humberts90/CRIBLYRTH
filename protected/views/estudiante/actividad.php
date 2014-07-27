
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantias-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<div id="wizard" class="col-lg-offset-1" >
		<h2>Actividades del cronograma</h2>
			
				
						
			<label><h2>Agregar Actividades</h2></label>		
			
					<br>
						<br>
					<label>Nombre de la actividad:</label>
							<?php echo $form->textField($model_3,'Descripcion',array('size'=>50,'maxlength'=>12)); ?>
							<?php echo $form->error($model_3,'Descripcion'); ?>
						
						<br>
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
					<div class="row buttons">
		<?php echo CHtml::submitButton($model_3->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>
			
			
			
			
</div>             

<?php $this->endWidget(); ?>