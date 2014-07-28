<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t04-Conocimiento-Tesis-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); 
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
    <?php //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++areas de conocimiento++++++++++++++++++++++++++++++++++++++?>
	<h2><?php echo $model->Titulo; ?></h2>
	</br>
	
	 	<label>Agregar Area de conocimiento</label>
		</br>
		
		</br>
	   	<label>Seleccione Departamento:</label>
					</br>
					</br>
<?php echo $form->dropDownList($model_1,'p09_id',CHtml::listData(P09Departamento::model()->findAll(),'id','Nombre'),array(

															'ajax'=>array(

															'type'=>'POST',

															'url'=>CController::createUrl('profesor/select2'),

															'update'=>'#'.CHtml::activeId($model_1,'P10_id'),


															),

															'empty'=>'Seleccione Departamento',

															'class'=>'form-control'


														)); ?>

					<?php echo $form->error($model_1,'p09_id'); ?>
					</br>
					</br>
					<label>Seleccione Eje Curricular:</label>
					</br>
					</br>
					<?php echo $form->dropDownList($model_1,'P10_id',CHtml::listData(P10EjeCurricular::model()->findAll(),'id','Nombre'),array(

															'ajax'=>array(

															'type'=>'POST',

															'url'=>CController::createUrl('profesor/selectdos2'),

															'update'=>'#'.CHtml::activeId($model_1,'P11_id'),


															),

															'empty'=>'Seleccione Eje Curricular',

															'class'=>'form-control'


														)); ?>

					<?php echo $form->error($model_1,'P10_id'); ?>
					</br>
					</br>
					<label>Seleccione Conocimiento:</label>
					</br>
					</br>
					<?php echo $form->dropDownList($model_1,'P11_id',CHtml::listData(P11Conocimientos::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Conocimientos','class'=>'form-control')); ?>
					</br>
					</br>
				
					<?php echo $form->error($model_1,'P11_id'); ?>
					
						<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar',array('confirm'=>'Seguro que desea Guardarlo?')); ?>
	</div>

<?php $this->endWidget(); ?>