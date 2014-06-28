<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tesis-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<h1> Cargar Tesis Culminada</h1>

<div id="wizard" class="col-lg-offset-1" >
		<h2>Información Tesis Culminada</h2>
		<br /> 
			<section >              
					<label>* Título del proyecto</label> 
					<?php echo $form->textField($model_1,'Titulo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model_1,'Titulo'); ?>
                    <br /> 
					
					<br /> 
					<label>* Nombre del Tesista</label> 
					<?php echo $form->textField($model_4,'Nombre',array('size'=>44,'maxlength'=>44)); ?>
					<?php echo $form->error($model_1,'Nombre'); ?>
                    <br /> 
					
					<br /> 
					<label>* Apellido del Tesista</label> 
					<?php echo $form->textField($model_4,'Apellido',array('size'=>44,'maxlength'=>44)); ?>
					<?php echo $form->error($model_4,'Apellido'); ?>
                    <br /> 					

					<br /> 
					<label>* Cedula del Tesista</label> 
					<?php echo $form->textField($model_4,'Cedula',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model_4,'Cedula'); ?>
                    <br /> 

					<br /> 
					<label>* Correo del Tesista</label> 
					<?php echo $form->textField($model_4,'Correo_Electronico',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model_4,'Correo_Electronico'); ?>
                    <br /> 
					
					<br />
					<label>Seleccione Tutor</label> 
					<?php echo $form->dropDownList($model_1,'tutor',CHtml::listData(M01Profesor::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Tutor','class'=>'form-control')); ?>
					<?php echo $form->error($model_1,'Tutor'); ?>
					<br />
					<br />
                    <label>* Objetivo General:</label> 

						<div id="myNicPanel2" style="width:450px;"></div>
                        
                        <?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model_1,
								    'value' => $model_1->isNewRecord ? '' : $model_1->Objetivo_General,
								    'attribute' => 'Objetivo_General',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								        'width'=>'430px',
								    ),
								));
						?>		
						<br />
					<br />
     
					<br /> 
					<label>* Lapso de ejecución de la Tesis</label> 
					<?php echo $form->textField($model_1,'Lapso_Academico_defensa',array('size'=>34,'maxlength'=>34)); ?>
					<?php echo $form->error($model_1,'Lapso_Academico_defensa'); ?>
                    <br /> 
			 
            	<br /> 
            	<br />                     
              </section>
            </div>
            
            <div class="row buttons">
            <?php echo CHtml::submitButton('Subir'); ?>
            </div>
			
<?php $this->endWidget(); ?>