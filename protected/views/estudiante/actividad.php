


<div id="wizard" class="col-lg-offset-1" >
		<h2> Cronograma</h2>
			
				<b><?php echo CHtml::encode($crono->getAttributeLabel('Nombre')); ?>:</b>
	            <p><?php echo CHtml::encode($crono->nombre); ?></p>
				<br>		
		
				<?php
				
				 $conocimientos=T11Actividad::model()->findAll('m02_id='.$crono->id);
				?> <h2>Actividades del cronograma</h2><?php
				 foreach ( $conocimientos as $valor){
				 echo $valor->Descripcion; 
				?> <br>	<?php
							
				
		
				}
			
				$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
				'id'=>'mymodal',
				 'options'=>array(
				 'title'=>'Agregar Actividad',
				 'width'=>400,
				 'height'=>400,
				 'autoOpen'=>false,
				 'resizable'=>false,
				 'modal'=>true,
				 'overlay'=>array(
					'backgroundColor'=>'#000',
					'opacity'=>'0.5'
					
				 ),
				 ),
				));
			
				echo $this->renderPartial('actividades',array(
				'model_3'=>$model_3,
				));
			
				$this->endWidget('zii.widgets.jui.CJuiDialog');
				?>
				
				
				<br>	
				
				<?php 	
		         echo CHtml::link('Agregar Actividad al Cronograma', '', array('onclick'=>'$("#mymodal").dialog("open");return false;'));?>
				 	<br>
				 <?php echo CHtml::link(CHtml::encode("Finalizar"), array('index')); ?>
				
				
					
		
			
			
			
			
</div>             
