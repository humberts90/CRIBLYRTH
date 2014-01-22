<?php 
	
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Noticias del sistema',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1> Modulo de Noticias del sistema TAP<h1/>

<br>
<h2>

<?php echo CHtml::link('Redactar noticia',array('cargarn')); ?>
</br>
<?php echo CHtml::link('Adminitrar noticias',array('admnot')); ?>
</h2>