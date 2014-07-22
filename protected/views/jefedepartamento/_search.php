<?php
/* @var $this AvisoController */
/* @var $model Aviso */
/* @var $form CActiveForm */
?>
<h3> Búsqueda avanzada </h3>

		<?php $form=$this->beginWidget('CActiveForm', array(
			'action'=>Yii::app()->createUrl($this->route),
				'htmlOptions' => array('enctype' => 'multipart/form-data'),
			'method'=>'POST',

		)); ?>
	<?php 
	$criteria= new CDbCriteria;
	$criteria->order='Nombre ASC';
	?>
	<TABLE BORDER="0">
		<TR>
			<TD><h4>Cedula</h4></TD> <TD><?php echo $form->textField($model,'Cedula',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?></TD> 
		</TR>
		<TR>
			<TD><h4>Nombre</h4></TD><TD><?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?></TD> 
		</TR>
		<TR>
		  <TD><h4>Apellido</h4></TD><TD><?php echo $form->textField($model,'Apellido',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?></TD>
		</TR>
		<TR>
			<TD><h4>Correo Electronico</h4></TD><TD><?php echo $form->textField($model,'Correo_UNET',array('size'=>60,'maxlength'=>140,'class'=>"form-control",'placeholder'=>"Buscar")); ?></TD>
		</TR>
		<TR>
		<TD COLSPAN=2>
		<div class="row buttons" align="center">
			<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-danger pull-right')); ?>
		</div>
		</TD>
		</TR>
	</TABLE>

	
		
	
		
	
	<?php $this->endWidget(); ?>


