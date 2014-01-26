<?php 
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Evaluar Anteproyectos'=>array('tesis'),
	'Detalles'=>array('tesdeta','id'=>$tes->id),
	'Evaluar',

);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Evaluar tesis <?php echo '</br>'.$tes->Titulo; ?> </h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'t06-observacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo '<b>Respuesta de la tesis: </b></br>'; ?>
		<?php echo $form->dropDownList($model,'M03_id',CHtml::listData(P03Status::model()->findAll(),'id','Descripcion'),array('empty'=>'Seleccione Tesis','class'=>'form-control')); ?>
		<?php echo $form->error($model,'M03_id'); ?>
	</div>
	<div class="row">
		<?php echo '<b> Observaciones: </b>' ?>
				<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
								    'model' => $model,
								    'value' => $model->isNewRecord ? '' : $model->Descripcion,
								    'attribute' => 'Descripcion',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								    ),
								));
						?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Evaluar' : 'Guardar',array('confirm'=>'¿Esta seguro que desea enviar esta evaluacion?')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

