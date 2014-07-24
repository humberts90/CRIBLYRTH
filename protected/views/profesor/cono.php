<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t06-conocimientos-profesor-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<div class="row" >
	<!-- INICIO COMBOS DEPENDIENTES -->
	</br>
					<label>Seleccione Departamento:</label>
					</br>
					</br>
<?php echo $form->dropDownList($model,'p09_id',CHtml::listData(P09Departamento::model()->findAll(),'id','Nombre'),array(

															'ajax'=>array(

															'type'=>'POST',

															'url'=>CController::createUrl('profesor/select'),

															'update'=>'#'.CHtml::activeId($model,'P10_id'),


															),

															'empty'=>'Seleccione Departamento',

															'class'=>'form-control'


														)); ?>

					<?php echo $form->error($model,'p09_id'); ?>
					</br>
					</br>
					<label>Seleccione Eje Curricular:</label>
					</br>
					</br>
					<?php echo $form->dropDownList($model,'P10_id',CHtml::listData(P10EjeCurricular::model()->findAll(),'id','Nombre'),array(

															'ajax'=>array(

															'type'=>'POST',

															'url'=>CController::createUrl('profesor/selectdos'),

															'update'=>'#'.CHtml::activeId($model,'P11_id'),


															),

															'empty'=>'Seleccione Eje Curricular',

															'class'=>'form-control'


														)); ?>

					<?php echo $form->error($model,'P10_id'); ?>
					</br>
					</br>
					<label>Seleccione Conocimiento:</label>
					</br>
					</br>
					<?php echo $form->dropDownList($model,'P11_id',CHtml::listData(P11Conocimientos::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Conocimientos','class'=>'form-control')); ?>
					</br>
					</br>
					<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>
					<?php echo $form->error($model,'id'); ?>

					
					
					
					
<!-- FIN COMBOS DEPENDIENTES -->
 
       
            </div>
        
<?php $this->endWidget(); ?>

