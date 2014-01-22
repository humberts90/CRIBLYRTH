<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tesis-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<div id="wizard" class="col-lg-offset-1" >
		<h2>Título y Introducción</h2>
			<section >              
					<label>* Título del proyecto</label> 
                  
					<?php echo $form->textField($model_1,'Titulo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model_1,'Titulo'); ?>
                    <br />              
                 	<label>¿ En Pareja ?</label> 
					<input type="radio" name="par" value="1"><br>
					<br />
					<label>Cedula de la pareja</label> 
					<input type="text" name="firstname"><br>
					<br />
					<label>Seleccione Tutor</label> 
					<?php echo $form->dropDownList($model_1,'tutor',CHtml::listData(M01Profesor::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Tutor','class'=>'form-control')); ?>
					<?php echo $form->error($model_1,'Tutor'); ?>
					<br />
					<br />
					<label>Carta del tutor</label> 
					 <?php echo $form->fileField($model_1,'Carta_Tutor',array('rows'=>1, 'cols'=>50)); ?>
	                <?php echo $form->error($model_1,'Carta_Tutor'); ?>	             
					<br />
					<label>* Introducción:</label> 
				
						<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model_1,
								    'value' => $model_1->isNewRecord ? '' : $model_1->Introduccion,
								    'attribute' => 'Introduccion',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								    ),
								));
						?>
					<br />
                </section>
        <h2>Capitulo I</h2> 
                <section>

                	<label>* Planteamiento del problema:</label> 
					
						<?php echo $form->textArea($model_1,'Planteamiento_Problema',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Planteamiento_Problema'); ?>
					<br />
					<label>* Objetivo General:</label> 
						
						<?php echo $form->textArea($model_1,'Objetivo_General',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Objetivo_General'); ?>
					<br />
					<label>* Objetivos especificos:</label> 
						
						<?php echo $form->textArea($model_1,'Objetivo_especifico',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Objetivo_especifico'); ?>
					<br />
					<label>* Justificacion e importancia:</label> 
						
						<?php echo $form->textArea($model_1,'Justificacion_Importancia',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Justificacion_Importancia'); ?>
					<br />
					<label>* Alcance y delimitaciones:</label> 
					<div class="row">
						
						<?php echo $form->textArea($model_1,'Alcance_Delimitaciones',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Alcance_Delimitaciones'); ?>
					</div>
					<br />
				       
                </section>

        <h2>Capitulo II</h2>
                <section>
                     <label>* Antecedentes:</label>
                		<?php echo $form->textArea($model_1,'Antecedentes',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Antecedentes'); ?>
					  <br />
					   <label>* Bases teoricas:</label>
	                	<?php echo $form->textArea($model_1,'Bases_Teoricas',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Bases_Teoricas'); ?>
					  <br />
					   <label>Bases legales: (opcional)</label>
                		<?php echo $form->textArea($model_1,'Bases_Legales',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Bases_Legales'); ?>
					  <br />
					   <label>* Definicion de Terminos:</label>
                		<?php echo $form->textArea($model_1,'Definicion_Terminos',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Definicion_Terminos'); ?>
					  <br />
													  
                </section>        
        <h2>Capitulo III parte 1</h2>
                <section>                     
                        <label>* Efoque de la Investigación:</label>                                  
							<?php echo $form->textArea($model_1,'Enfoque_Investigacion',array('rows'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($model_1,'Enfoque_Investigacion'); ?>
						<br />
						<label>* Tipo de Investigación:</label>                                  
							<?php echo $form->textArea($model_1,'Tipo_Nivel_Invesstigacion',array('rows'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($model_1,'Tipo_Nivel_Invesstigacion'); ?>
						<br />
						<label>* Diseño de la Investigación:</label>                                  
							<?php echo $form->textArea($model_1,'Diseno_Investigacion',array('rows'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($model_1,'Diseno_Investigacion'); ?>
						<br />
						<label> Poblacion de muestra: (opcional)</label>                                  
							<?php echo $form->textArea($model_1,'Poblacion_Muestra',array('rows'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($model_1,'Poblacion_Muestra'); ?>
						<br />
                </section>
        <h2>Capitulo III parte 2</h2>
             	<section>               
                 <label>* Tecnicas de recoleccion de datos:</label>                                  
					<?php echo $form->textArea($model_1,'Tecnicas_Recoleccion_Datos',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model_1,'Tecnicas_Recoleccion_Datos'); ?>
				<br />
				  <label>* Metodologias:</label>                                  
					<?php echo $form->textArea($model_1,'Metodologias',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model_1,'Metodologias'); ?>
				<br />
				  <label>* Referencias:</label>                                  
					<?php echo $form->textArea($model_1,'Referencias',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model_1,'Referencias'); ?>
				<br />
                </section>
            </div>
        </div>
<?php $this->endWidget(); ?>