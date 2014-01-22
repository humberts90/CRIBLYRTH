<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Modulo de Noticias'=> array('noti'),
	'Nueva noticia',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>
<h1>Nueva Noticia </h1>

<?php $this->renderPartial('_form_noti', array('model'=>$noticia)); ?>

