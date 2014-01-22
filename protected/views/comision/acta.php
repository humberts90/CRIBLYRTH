<?php 
	
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Acta de la comisión',
);
echo $this->renderPartial('menu', array('usu'=>$Usuario));
?>

<h1> Nueva acta de la comision<h1/>

<br>
<h2>

<?php echo CHtml::link('Redactar acta',array('redactar')); ?>
</br>
<?php echo CHtml::link('Adminitrar actas',array('adminac')); ?>
</h2>