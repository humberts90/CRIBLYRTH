<?php
/* @var $this T06ConocimientoProfesorController */
/* @var $model T06ConocimientoProfesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t06-conocimiento-profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		
		<label>Seleccione Conocimiento</label> <br>
					<?php echo $form->dropDownList($model,'P11_id',CHtml::listData(P11Conocimientos::model()->findAll(),'id','Nombre'),array('empty'=>'Seleccione Conocimiento','class'=>'form-control')); ?>
					<?php echo $form->error($model,'P11_id'); ?>
					
					<br />	
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->