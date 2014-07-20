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
<script type="text/javascript">
function cambiarTextfields(selec) {
	if (selec.value != 0) {
	document.getElementById('Correo_Electronico').disabled = true;
	
	}
	else  {
	document.getElementById('Correo_Electronico').disabled = false;

	}
}


</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'m05-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
		
	<div class="row">
			<br><label>Correos a grupos:</label> <br>
					<?php //echo $form->dropDownList($model,'sta',CHtml::listData(P01Rol::model()->findAllByPk(array(4,3,6)),'id','nombre'),array('empty'=>'Seleccione grupo a enviar','class'=>'form-control')); ?>
					
					
					<select ... onchange="cambiarTextfields(this);" name="sta">
					<option value="0">Seleccione grupo a enviar </value> 
					<?php foreach ($role as $as ) {
						echo '<option value="'.$as->id.'">'.$as->nombre.'</value>';
					}

					?>

					</select>

			<br />
		
	</div>

	<div class="row">
	</br>
		<?php echo $form->labelEx($model,'Correo_Electronico'); ?></br>
		<input type="text" ... id="Correo_Electronico" size="60" maxlength="100" name="Correo_Electronico" />
		<br />
		<br />
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asunto: '); ?></br>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
		<br />
		<br />
		
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