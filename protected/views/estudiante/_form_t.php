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
		               <div id="myNicPanel" style="width:450px;"></div>

						<div id="myInstance1" style="font-size: 16px; height:250px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Introduccion",array("type"=>"hidden","id"=>"intro"),array('rows'=>6, 'cols'=>50)); ?>
		                <?php echo $form->error($model_1,'Introduccion'); ?>
					<br />
                </section>
        <h2>Capitulo I</h2> 
                <section>

                	<label>* Planteamiento del problema:</label> 
					
					<div id="myNicPanel1" style="width:450px;"></div>

						<div id="myInstance2" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Planteamiento_Problema",array("type"=>"hidden","id"=>"Planteamiento_Problema"),array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Planteamiento_Problema'); ?>
					<br />
					<label>* Objetivo General:</label> 

						<div id="myNicPanel2" style="width:450px;"></div>

						<div id="myInstance3" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Objetivo_General",array("type"=>"hidden","id"=>"Objetivo_General"),array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Objetivo_General'); ?>
					<br />
					<label>* Objetivos especificos:</label> 
						<div id="myNicPanel3" style="width:450px;"></div>

						<div id="myInstance4" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Objetivo_especifico",array("type"=>"hidden","id"=>"Objetivo_especifico"),array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Objetivo_especifico'); ?>
					<br />
					<label>* Justificacion e importancia:</label> 
						<div id="myNicPanel4" style="width:450px;"></div>

						<div id="myInstance5" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Justificacion_Importancia",array("type"=>"hidden","id"=>"Justificacion_Importancia"),array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Justificacion_Importancia'); ?>
					<br />
					
				       
                </section>

        <h2>Capitulo II</h2>
                <section>

                	<label>* Alcance y delimitaciones:</label> 
						<div id="myNicPanel5" style="width:450px;"></div>

						<div id="myInstance6" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Alcance_Delimitaciones",array("type"=>"hidden","id"=>"Alcance_Delimitaciones"),array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model_1,'Alcance_Delimitaciones'); ?>
					
					<br />
                     <label>* Antecedentes:</label>
                     <div id="myNicPanel6" style="width:450px;"></div>

						<div id="myInstance7" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Antecedentes",array("type"=>"hidden","id"=>"Antecedentes"),array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_1,'Antecedentes'); ?>
                	
					  <br />
					   <label>* Bases teoricas:</label>
					   <div id="myNicPanel7" style="width:450px;"></div>

						<div id="myInstance8" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Bases_Teoricas",array("type"=>"hidden","id"=>"Bases_Teoricas"),array('rows'=>6, 'cols'=>50)); ?>
		                <?php echo $form->error($model_1,'Bases_Teoricas'); ?>
					  <br />
					   <label>Bases legales: (opcional)</label>

					    <div id="myNicPanel8" style="width:450px;"></div>

						<div id="myInstance9" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_1,"Bases_Legales",array("type"=>"hidden","id"=>"Bases_Legales"),array('rows'=>6, 'cols'=>50)); ?>
		                <?php echo $form->error($model_1,'Bases_Legales'); ?>
					  <br />
					   
													  
                </section>        
        <h2>Capitulo III parte 1</h2>
                <section>    
                <label>* Definicion de Terminos:</label>

					   <div id="myNicPanel9" style="width:450px;"></div>

						<div id="myInstance10" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Definicion_Terminos",array("type"=>"hidden","id"=>"Definicion_Terminos"),array('rows'=>6, 'cols'=>50)); ?>
						  <?php echo $form->error($model_1,'Definicion_Terminos'); ?>
					  <br />                 
                        <label>* Efoque de la Investigación:</label>       

					   <div id="myNicPanel10" style="width:450px;"></div>

						<div id="myInstance11" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Enfoque_Investigacion",array("type"=>"hidden","id"=>"Enfoque_Investigacion"),array('rows'=>6, 'cols'=>50)); ?>
						 <?php echo $form->error($model_1,'Enfoque_Investigacion'); ?>
						<br />
						<label>* Tipo de Investigación:</label>                      
						 <div id="myNicPanel11" style="width:450px;"></div>

						<div id="myInstance12" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Tipo_Nivel_Invesstigacion",array("type"=>"hidden","id"=>"Tipo_Nivel_Invesstigacion"),array('rows'=>6, 'cols'=>50)); ?>
						 	<?php echo $form->error($model_1,'Tipo_Nivel_Invesstigacion'); ?>
						<br />
						<label>* Diseño de la Investigación:</label>       
						 <div id="myNicPanel12" style="width:450px;"></div>

						<div id="myInstance13" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Diseno_Investigacion",array("type"=>"hidden","id"=>"Diseno_Investigacion"),array('rows'=>6, 'cols'=>50)); ?>
						 <?php echo $form->error($model_1,'Diseno_Investigacion'); ?>
						<br />
						
                </section>
        <h2>Capitulo III parte 2</h2>
             	<section>  
             	<label> Poblacion de muestra: (opcional)</label>     
						 <div id="myNicPanel13" style="width:450px;"></div>

						<div id="myInstance14" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Poblacion_Muestra",array("type"=>"hidden","id"=>"Poblacion_Muestra"),array('rows'=>6, 'cols'=>50)); ?>
						 <?php echo $form->error($model_1,'Poblacion_Muestra'); ?>
						<br />             
                 <label>* Tecnicas de recoleccion de datos:</label>               
                 <div id="myNicPanel14" style="width:450px;"></div>

						<div id="myInstance15" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Tecnicas_Recoleccion_Datos",array("type"=>"hidden","id"=>"Tecnicas_Recoleccion_Datos"),array('rows'=>6, 'cols'=>50)); ?>
						 <?php echo $form->error($model_1,'Tecnicas_Recoleccion_Datos'); ?>
				<br />
				  <label>* Metodologias:</label>                    
				   <div id="myNicPanel15" style="width:450px;"></div>

						<div id="myInstance16" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Metodologias",array("type"=>"hidden","id"=>"Metodologias"),array('rows'=>6, 'cols'=>50)); ?>
						  <?php echo $form->error($model_1,'Metodologias'); ?>
				<br />
				  <label>* Referencias:</label>                 
				  <div id="myNicPanel16" style="width:450px;"></div>

						<div id="myInstance17" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
						 <?php echo $form->hiddenField($model_1,"Referencias",array("type"=>"hidden","id"=>"Referencias"),array('rows'=>6, 'cols'=>50)); ?>
                              <?php echo $form->error($model_1,'Referencias'); ?>
				<br />
                </section>
            </div>
        
<?php $this->endWidget(); ?>

