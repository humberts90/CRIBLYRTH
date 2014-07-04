<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantias-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<div id="wizard" class="col-lg-offset-1" >
		<h2>Datos del Pasante</h2>
			<section > 
				<label>Cédula del Pasante</label><br>
							<?php echo $form->textField($model_3,'Cedula',array('size'=>45,'maxlength'=>45)); ?>
							<?php echo $form->error($model_3,'Cedula'); ?>
					<br>
				<label>Apellido del Pasante</label><br>
							<?php echo $form->textField($model_3,'Apellido',array('size'=>45,'maxlength'=>45)); ?>
							<?php echo $form->error($model_3,'Apellido'); ?>
					<br>
				<label>Nombre del Pasante</label><br>
							<?php echo $form->textField($model_3,'Nombre',array('size'=>45,'maxlength'=>45)); ?>
							<?php echo $form->error($model_3,'Nombre'); ?>
					<br>
				<label>Correo electrónico</label><br>
							<?php echo $form->textField($model_3,'Correo_Electronico',array('size'=>60,'maxlength'=>255)); ?>
							<?php echo $form->error($model_3,'Correo_Electronico'); ?>
					<br>
				<label>Lapso académico de Defensa</label><br>	
							<?php echo $form->textField($model_2,'Lapso_Academico_defensa',array('size'=>12,'maxlength'=>12)); ?>
							<?php echo $form->error($model_2,'Lapso_Academico_defensa'); ?>
					<br>
				<label>Fecha de Aprobación</label><br>
							<?php echo $form->textField($model_2,'Fecha_Aprobacion',array('size'=>12,'maxlength'=>12)); ?>
							<?php echo $form->error($model_2,'Fecha_Aprobacion'); ?>
					<br>
			</section>
		<h2>Datos de la empresa</h2>
			<section > 
				<br><label>Seleccione Empresa</label> <br>
					<?php echo $form->dropDownList($model_2,'M06_id',CHtml::listData(M06Empresa::model()->findAll(),'id','Razon_Social'),array('empty'=>'Seleccione Empresa','class'=>'form-control')); ?>
					<?php echo $form->error($model_2,'M06_id'); ?>
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
					
			</section>
			<h2>Datos del Proyecto </h2>
			<section>
					<label>Titulo</label><br>
						<div id="myNicPanel1" style="width:450px;"></div>

						<div id="myInstance1" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_2,"Titulo",array("type"=>"hidden","id"=>"Titulo"),array('size'=>30,'maxlength'=>255)); ?>
						<?php echo $form->error($model_2,'Titulo'); ?>
					<br>	
					<label>Descripcion del trabajo</label><br>
					<div id="myNicPanel3" style="width:450px;"></div>

						<div id="myInstance3" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_2,"Descripcion_Trabajo",array("type"=>"hidden","id"=>"Descripcion_Trabajo"), array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Descripcion_Trabajo'); ?>

					<br>
					<label>Objetivo General</label><br>
						<div id="myNicPanel4" style="width:450px;"></div>

						<div id="myInstance4" style="font-size: 16px; height:100px; background-color: #fff; padding: 3px; border: 1px solid #888; width: 443px; overflow:scroll;">
						
						</div><br />
		                
		                <?php echo $form->hiddenField($model_2,"Objetivo_General",array("type"=>"hidden","id"=>"Objetivo_General"), array('rows'=>6, 'cols'=>50)); ?>
						<?php echo $form->error($model_2,'Objetivo_General'); ?>
					<br>	
			</section>
</div>             

<?php $this->endWidget(); ?>