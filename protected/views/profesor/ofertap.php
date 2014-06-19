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
			<label>Planteamiento del problema:</label> 
					
						<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model,
								    'value' => $model->isNewRecord ? '' : $model->Planteamiento_Problema,
								    'attribute' => 'Planteamiento_Problema',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								    ),
								));
						?>
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
				<label><h2>Lapso Académico: </h2></label> 
           	 <br/>      
				<?php echo $form->textField($model,'Lapso_Academico_defensa',array('size'=>6,'maxlength'=>6)); ?>
				<?php //echo $form->error($model,'Lapso_Academico_defensa'); ?>
            	<br /> 
            	<br /> 

				<div class="row buttons">
					<?php echo CHtml::submitButton('Subir'); ?>
				</div>

<?php $this->endWidget(); ?>