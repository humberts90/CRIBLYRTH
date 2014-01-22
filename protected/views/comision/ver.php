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
?>
</br>
</br>
<?php echo $model->Descripcion; ?>