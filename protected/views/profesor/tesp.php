<?php 
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Evaluar Anteproyectos'=>array('pasantia'),
	'Detalles',

);

echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>


<h2><?php echo $model->Titulo; ?></h2>

			<?php 		
			foreach ($has1 as  $value) {
			$val=M05Usuario::model()->findByPk($value->M05_id); 
			$actor=P02TipoRelacion::model()->findByPk($value->P02_id);
			?>

			<b><?php echo CHtml::encode($actor->Descripcion); ?>:</b>
			<?php echo CHtml::encode($val->Nombre." ".$val->Apellido); ?>
			<br />

			<?php } ?>

<?php echo CHtml::link(CHtml::encode("Descargar constancia"), array('const', 'id'=>$model->id)); ?></b>
</br>
<?php echo CHtml::link(CHtml::encode("Agregar Area de Conocimiento"), array('areasp', 'id'=>$model->id)); ?></b>
</br>

<b><?php echo CHtml::encode($model->getAttributeLabel('Titulo')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Titulo)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Planteamiento_Problema')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Planteamiento_Problema)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Descripcion_Trabajo')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Descripcion_Trabajo)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_General')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Objetivo_General)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_Especifico')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Objetivo_Especifico)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Antecedentes')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Antecedentes)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Metodologia')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Metodologia)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Productos_Desarrollo')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Productos_Desarrollo)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha_Inscripcion')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Fecha_Inscripcion)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha_Defensa')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Fecha_Defensa)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha_Aprobacion')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Fecha_Aprobacion)); ?></p>
	<br />
	
	<b><?php echo CHtml::encode($model->getAttributeLabel('fecha_val')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->fecha_val)); ?></p>
	<br />
	<b><?php echo CHtml::encode($model->getAttributeLabel('vacantes')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->vacantes)); ?></p>
	<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('Lapso_Academico_defensa')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Lapso_Academico_defensa)); ?></p>
	<br />

