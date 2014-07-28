<div class="row">

			</br>
			<h2>Sugerencia de tutores académicos</h2>
			
			
				<?php  foreach ($conocimiento as $key) {

					$aso=T06ConocimientoProfesor::model()->findAll("P11_id = ".$key->P11_id);
					$cono=P11Conocimientos::model()->findByPk($key->P11_id);
					$css=T06ConocimientoProfesor::model();
					$criteria=new CDbCriteria;

					echo " <h3> Area de Conocimiento </h3> </br>";
					echo $cono->Nombre."";				
					echo "<h4>Profesores sugeridos por esta area </h4>";					
					$criteria->condition='P11_id='.$key->P11_id;					

					$dataP= new CActiveDataProvider(T06ConocimientoProfesor::model(), array('criteria'=>$criteria,));
					 $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'p01-rol-grid',
						'dataProvider'=>$dataP,									
							  		
	
						'columns'=>array(						
							
							 array(          // display 'author.username' using an expression
					            
					            'value'=>'$data->m01D->Nombre',
        						),
							 array(          // display 'author.username' using an expression
					            
					            'value'=>'$data->m01D->Apellido',
        						),
							
					),
				)); 
					
				
				}?>
	</div>