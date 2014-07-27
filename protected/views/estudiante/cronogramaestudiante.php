
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantias-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<div id="wizard" class="col-lg-offset-1" >
		<h2>Cronograma de actividades</h2>
			
						
					<br>
					
					<label>Nombre:</label>
							<?php echo $form->textField($model_7,'nombre',array('size'=>50,'maxlength'=>12)); ?>
							<?php echo $form->error($model_7,'nombre'); ?>
						<br>	
					    <br>
					
					<label>Descripcion:</label>
							<?php echo $form->textField($model_7,'descripcion',array('size'=>50,'maxlength'=>12)); ?>
							<?php echo $form->error($model_7,'descripcion'); ?>
						<br>	
			
					<br>
					<div class="row buttons">
		<?php echo CHtml::submitButton($model_7->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>
			
			
			
</div>             

<?php $this->endWidget(); ?>
