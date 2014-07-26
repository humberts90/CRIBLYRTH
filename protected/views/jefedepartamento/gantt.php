
<?php
echo $this->renderPartial('menu', array('usu'=>$Usuario));
require('Librerias/gantti.php'); 


date_default_timezone_set('UTC');
setlocale(LC_ALL, 'en_US');

$gantti = new Gantti($data, array(
  'title'      => 'Actividades',
  'cellwidth'  => 35,
  'cellheight' => 35,
  'today'      => true
));

?>

<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/Estilos/gantti.css">
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/Estilos/screen.css">



<h1>Cronograma de Actividades de <?php echo $proy->nombre; ?></h1>

<?php echo $gantti ?>


	<?php echo CHtml::link(CHtml::encode("Volver"), array('cronograma', 'id'=>$proy->m04_pasantia_id)); ?>
	<br />

	
	
	
