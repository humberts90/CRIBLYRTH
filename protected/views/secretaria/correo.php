<?php
$this->breadcrumbs=array(
	'Inicio',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Enviar correo</h1>
<?php
/* @var $this M05UsuarioController */
/* @var $model M05Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m05-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>


	<div class="row">
		<?php echo $form->labelEx($model,'Correo_Electronico'); ?></br>
		<?php echo $form->textField($model,'Correo_Electronico',array('size'=>60,'maxlength'=>100)); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asunto: '); ?></br>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
		
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'Contenido'); ?>
				<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model,
								    'value' => $model->isNewRecord ? '' : $model->Descripcion,
								    'attribute' => 'Nombre',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								    ),
								));
			?>
		
	</div>






	



	


	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->