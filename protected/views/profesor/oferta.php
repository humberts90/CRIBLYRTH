<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Ofeta de tesis'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>

<h1>Subir oferta tesis</h1>

	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tesis-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

		<label><h2>Título del proyecto:</h2></label> 
            <br/>      
			<?php echo $form->textField($model,'Titulo',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'Titulo'); ?>
            <br /> 
            <br /> 
		<label><h2>Introducción:</h2></label>						
			
			<br />		                
		        	<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model,
								    'value' => $model->isNewRecord ? '' : $model->Introduccion,
								    'attribute' => 'Introduccion',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								        'width'=>'300px',
								    ),
								));
					?>
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
			 <label>Referencias:</label>                                  
						<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model,
								    'value' => $model->isNewRecord ? '' : $model->Referencias,
								    'attribute' => 'Referencias',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								    ),
								));
						?>
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