<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Ofeta de pasantías'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Subir oferta pasantías</h1>

	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantias-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

		<label><h2>Título del proyecto:</h2></label> 
            <br/>      
			<?php echo $form->textField($model,'Titulo',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'Titulo'); ?>
            <br /> 
            <br />

			<label><h2>Descripción de trabajo:</h2></label>						
			
			<br />		                
		        	<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model,
								    'value' => $model->isNewRecord ? '' : $model->Descripcion_Trabajo,
								    'attribute' => 'Descripcion_Trabajo',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								        'width'=>'300px',
								    ),
								));
					?>
			<br />
			 
			<label>Empresa:</label>                                  
						<?php echo $form->dropDownList($model,'M06_id',CHtml::listData(M06Empresa::model()->findAll(),'id','Razon_Social'),array('empty'=>'Seleccione Empresa','class'=>'form-control')); ?>
						<?php echo $form->error($model,'M06_id'); ?>
				<br />
				<br />
				<br />

			<label>Tutor Externo:</label>                                  
						<?php echo $form->dropDownList($externo,'id',CHtml::listData(M07TutorExterno::model()->findAll(),'id','Apellido','Nombre'),array('empty'=>'Seleccione Tutor Externo','class'=>'form-control')); ?>
						<?php echo $form->error($externo,'id'); ?>
				<br />
				<br />
				<br />

			<label>Fecha limite:</label>                                  
						<?php 
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			                    'model' => $model,
			                    'language' => 'es',
			                    'attribute' => 'fecha_val',
			                    'options' => array(
			                        'showAnim' => 'fold',
			                        'dateFormat' => 'yy-mm-dd',
			                    ),
			            ));
						?>
						<?php echo $form->error($model,'fechal_val'); ?>
				<br />
				<br />
				<br />	

			<label>Nº de Vacantes:</label>                                  
						<?php echo $form->textField($model,'vacantes',array('size'=>12,'maxlength'=>12)); ?>
						<?php  echo $form->error($model,'vacantes'); ?>
				<br />
				<br />
				<br />	


				<script>

					function revisar()
					{
						if(document.getElementById('pago_0').checked)
						{
							document.getElementById('pagos').style.display='none';
							
						}
						else
						{
							document.getElementById('pagos').style.display='block';
							

						}
					}

					</script>

		<?php 
			echo CHtml::radioButtonList('pago','sp',array('sp'=>'Sin Pago','cp'=>'Con Pago'),array('separator'=>' ','onclick'=>'revisar()'));
		?>
			<div id="pagos" style="display:none;">
				
			<br />
				<br />
			<label>Pago:</label>                                  
						<?php echo $form->textField($model,'pago'); ?>
						<?php  echo $form->error($model,'pago'); ?>
			
		</div>		
		<br />
	<br />
				<br />
			
				<div class="row buttons">
					<?php echo CHtml::submitButton('Subir'); ?>
				</div>

<?php $this->endWidget(); ?>