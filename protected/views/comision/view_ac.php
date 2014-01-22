<?php
/* @var $this T03ActaController */
/* @var $model T03Acta */


?>

<h1>Acta <?php echo $model->id; ?></h1>

</br>
Fecha: <?php echo date("d/m/Y",strtotime($model->Fecha)); ?>
</br>
</br><p>
<?php echo $model->Descripcion; ?>
</br></p>
<?php if($model->Anexo != NULL)  
	echo '<A HREF="'.Yii::app()->theme->baseUrl.'/Actas/Anexo/'.$model->id.'/'.$model->Anexo.'" TARGET="_blank" >Descargar anexo</A>';
?>
	