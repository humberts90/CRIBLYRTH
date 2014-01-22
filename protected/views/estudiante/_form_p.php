<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantias-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<div id="wizard" class="col-lg-offset-1" >
		<h2>Datos de la empresa</h2>
			<section > 
				<br><label>Seleccione Empresa</label> <br>
					<?php echo $form->dropDownList($model_1,'temp',CHtml::listData(M06Empresa::model()->findAll(),'id','Razon_Social'),array('empty'=>'Seleccione Empresa','class'=>'form-control')); ?>
					<?php echo $form->error($model_1,'temp'); ?>
					<br />
				<br><label>Empresa Nueva</label><br>
					<?php echo CHtml::link('Registrar nueva empresa','#',array('class'=>'search-button')); ?>
					<div class="search-form" style="display:none">
					<?php $this->renderPartial('_search',array(
					'model_1'=>$model_1,'form'=>$form,
					)); ?>
			</section>
				<h2>Datos tutor externo</h2>
			<section>
					<label>Cedula</label><br>
							<?php echo $form->textField($model_4,'Cedula',array('size'=>12,'maxlength'=>12)); ?>
							<?php echo $form->error($model_4,'Cedula'); ?>
					<br>	
					<label>Apellidos</label><br>
							<?php echo $form->textField($model_4,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
							<?php echo $form->error($model_4,'Apellido'); ?>
					<br>
					<label>Nombres</label><br>
							<?php echo $form->textField($model_4,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
							<?php echo $form->error($model_4,'Nombre'); ?>
					<br>
					<label>Telefono</label><br>
							<?php echo $form->textField($model_4,'Telefono',array('size'=>25,'maxlength'=>25)); ?>
							<?php echo $form->error($model_4,'Telefono'); ?>
					<br>	
					<label>Correo</label><br>
						<?php echo $form->textField($model_4,'Correo',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model_4,'Correo'); ?>
					<br>
					<label>Cargo en la empresa</label><br>
						<?php echo $form->textField($model_4,'Cargo_Empresa',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model_4,'Cargo_Empresa'); ?>
					<br>
					<label>Enlace</label><br>
						<?php echo $form->textField($model_4,'Enlace',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model_4,'Enlace'); ?>
					<br>
					<label>Curriculum en pdf</label><br>
					 <?php echo $form->fileField($model_4,'Carta_Tutor',array('rows'=>1, 'cols'=>50)); ?>
	                <?php echo $form->error($model_4,'Carta_Tutor'); ?>	 
					<br>
			</section>
			<h2>Plan de Trabajo I</h2>
			<section>
					<label>Titulo</label><br>
						<?php echo $form->textField($model_2,'Titulo',array('size'=>30,'maxlength'=>255)); ?>
						<?php echo $form->error($model_2,'Titulo'); ?>
					<br>	
					<label>Planteamiento del problema</label><br>
						<?php echo $form->textArea($model_2,'Planteamiento_Problema',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Planteamiento_Problema'); ?>
					<br>
					<label>Descripcion del trabajo</label><br>
						<?php echo $form->textArea($model_2,'Descripcion_Trabajo',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Descripcion_Trabajo'); ?>
					<br>
					<label>Objetivo General</label><br>
						<?php echo $form->textArea($model_2,'Objetivo_General',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Objetivo_General'); ?>
					<br>	
					<label>Objetivo Especificosl</label><br>
						<?php echo $form->textArea($model_2,'Objetivo_Especifico',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Objetivo_Especifico'); ?>
					<br>
			</section>
			<h2>Plan de Trabajo II</h2>
			<section>
					<label>Antecedentes</label><br>
						<?php echo $form->textArea($model_2,'Antecedentes',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Antecedentes'); ?>
					<br>
					<label>Metodologia</label><br>
						<?php echo $form->textArea($model_2,'Metodologia',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Metodologia'); ?>
					<br>
					<label>Productos de desarrolloa</label><br>
						<?php echo $form->textArea($model_2,'Productos_Desarrollo',array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Productos_Desarrollo'); ?>
					<br>
			</section>
			<h2>Cronograma de actividades</h2>
			<section>

			</section>
</div>             

<?php $this->endWidget(); ?>

