<?php 
	
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Noticias del sistema'=>array('noti'),
	'Ver Noticia'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1>Noticia</h1>
<?php 
	echo 'Fecha de la notica: '.date('d/m/Y',strtotime($model->Fecha));
	echo '</br>';
	if($model->Imagen!=NULL){ 
		$direccion=Yii::app()->theme->baseUrl.'/Noticias/'.$model->id.'/'.$model->Imagen;
	echo "<img src='".$direccion."' border='0' width='80%' height='40%'>"; 
	}
?>
</br>
</br>
<?php echo $model->Descripcion; ?>
</br>
<b>Escrito por: </b><?php echo $model->m05->Nombre.' '.$model->m05->Apellido;?>