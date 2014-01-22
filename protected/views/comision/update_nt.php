<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Noticias del sistema'=>array('noti'),
	'Editar Noticias'
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));


?>

<h1>Editar noticia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form_noti', array('model'=>$model)); ?>