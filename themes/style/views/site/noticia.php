<div class="cuerpo" >
            	<div class="tituloCom"><h3><?php echo $model->Titulo; ?></h3></div>
            	<?php echo date("d/m/Y",strtotime($model->Fecha));?>
        </br>
  <?php 
	echo 'Fecha de la notica: '.date('d/m/Y',strtotime($model->Fecha));
	echo '</br>';
	if($model->Imagen!=NULL){ 
		$direccion=Yii::app()->theme->baseUrl.'/Noticias/'.$model->id.'/'.$model->Imagen;
	echo "<img src='".$direccion."' border='0' width='80%' height='40%' align='rigth' >"; 
	}
?>
            <?php echo $model->Descripcion; ?>
        </br>
        <?php echo CHtml::link('Regresar',array('site/index')); ?>
</div>