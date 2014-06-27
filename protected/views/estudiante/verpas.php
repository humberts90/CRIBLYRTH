<?php  


$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Ver Pasantias',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario,"check_1"=>$check_1,"check_2"=>$check_2));

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

</br>
</br><h1>
	<p><?php echo $model->Titulo; ?></p></h1>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Planteamiento Problema')); ?>:</b>
	<p><?php echo CHtml::encode($model->Planteamiento_Problema); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo General')); ?>:</b>
	<p><?php echo CHtml::encode($model->Objetivo_General); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo especifico')); ?>:</b>
	<p><?php echo CHtml::encode($model->Objetivo_Especifico); ?></p>
	<br />	
	<b><?php echo CHtml::encode($model->getAttributeLabel('Descripcion Trabajo')); ?>:</b>
	<p><?php echo CHtml::encode($model->Descripcion_Trabajo); ?></p>
	<br />


	<b><?php echo CHtml::encode($model->getAttributeLabel('Antecedentes')); ?>:</b>
	<p><?php echo CHtml::encode($model->Antecedentes); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Metodologia')); ?>:</b>
	<p><?php echo CHtml::encode($model->Metodologia); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Productos Desarrollo')); ?>:</b>
	<p><?php echo CHtml::encode($model->Productos_Desarrollo); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Inscripcion')); ?>:</b>
	<p><?php echo CHtml::encode($model->Fecha_Inscripcion); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Defensa')); ?>:</b>
	<p><?php echo CHtml::encode($model->Fecha_Defensa); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Aprobacion')); ?>:</b>
	<p><?php echo CHtml::encode($model->Fecha_Aprobacion); ?></p>
	<br />

	
	<?php echo CHtml::link(CHtml::encode("Ver Cronograma de Actividades"), array('cronograma', 'id'=>$model->id)); ?>
	<br />

