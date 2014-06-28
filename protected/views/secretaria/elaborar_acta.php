<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Elaborar Acta'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h2>Elaboración de Actas a partir de Plantillas </h2>


	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasantias-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<label>Plantilla:</label>                                  
						<?php $data=CHtml::listData($model,'id_plantilla','nombre')?>
						<?php echo CHtml::dropDownList('T12Plantillas','id',$data,array('empty'=>'Seleccione Plantilla','class'=>'form-control','ajax' => array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('secretaria/contenido' ),
                                'update' => '#contenido',
								'dataType'=>'json',	
                                'data'=>array('store'=>'js:this.value',),   
                                'success'=> 'function(data) {
									$("#contenido").empty();
									$("#contenido").val(data["contenido"]);
									$("#descripcion").empty();
									$("#descripcion").val(data["descripcion"]);
                                } ', 
                      ),)); ?>
						
						<label><h2>Descripcion del Acta:</h2></label> 
            <br/>      
			<?php echo CHtml::textField('text','Descripcion',array('id'=>'descripcion','size'=>45,'maxlength'=>45)); ?>
			
            <br /> 
            <br /> 	
			<label>Contenido del Acta:</label> 
					
						<?php
							Yii::import('ext.krichtexteditor.KRichTextEditor');
								$this->widget('KRichTextEditor', array(
									'id'=>'contenido',
								    'name'=>'contenido',
								    'value' => '',
								    'attribute' => 'Planteamiento_Problema',
								    'options' => array(
								        'theme_advanced_resizing' => 'true',
								        'theme_advanced_statusbar_location' => 'bottom',
								    ),
								));
						?>
			<br />
						
				<br />
				<br />
				<br />


<?php $this->endWidget(); ?>