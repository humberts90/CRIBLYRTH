<?php 
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Evaluar Anteproyectos'=>array('tesis'),
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
<b><?php echo '<A HREF="'.Yii::app()->theme->baseUrl.'/Cartas_tutores/Tesis/'.$model->id.'/'.$model->Carta_Tutor.'" TARGET="_blank" >Carta del tutor</A>'; ?></b>
</br>
</br>
<b>
<?php echo CHtml::link(CHtml::encode("Generar constancia"), array('const', 'id'=>$model->id)); ?></b>
</br>
</br>
<b><?php echo CHtml::encode($model->getAttributeLabel('Introduccion')); ?>:</b>
	<p><?php echo CHtml::encode($model->Introduccion); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Planteamiento_Problema')); ?>:</b>
	<p><?php echo CHtml::encode($model->Planteamiento_Problema); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_General')); ?>:</b>
	<p><?php echo CHtml::encode($model->Objetivo_General); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_especifico')); ?>:</b>
	<p><?php echo CHtml::encode($model->Objetivo_especifico); ?></p>
	<br />	
	<b><?php echo CHtml::encode($model->getAttributeLabel('Justificacion_Importancia')); ?>:</b>
	<p><?php echo CHtml::encode($model->Justificacion_Importancia); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Alcance_Delimitaciones')); ?>:</b>
	<p><?php echo CHtml::encode($model->Alcance_Delimitaciones); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Antecedentes')); ?>:</b>
	<p><?php echo CHtml::encode($model->Antecedentes); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Bases_Teoricas')); ?>:</b>
	<p><?php echo CHtml::encode($model->Bases_Teoricas); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Bases_Legales')); ?>:</b>
	<p><?php echo CHtml::encode($model->Bases_Legales); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Definicion_Terminos')); ?>:</b>
	<p><?php echo CHtml::encode($model->Definicion_Terminos); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Enfoque_Investigacion')); ?>:</b>
	<p><?php echo CHtml::encode($model->Enfoque_Investigacion); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tipo_Nivel_Invesstigacion')); ?>:</b>
	<p><?php echo CHtml::encode($model->Tipo_Nivel_Invesstigacion); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Diseno_Investigacion')); ?>:</b>
	<p><?php echo CHtml::encode($model->Diseno_Investigacion); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Poblacion_Muestra')); ?>:</b>
	<p><?php echo CHtml::encode($model->Poblacion_Muestra); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tecnicas_Recoleccion_Datos')); ?>:</b>
	<p><?php echo CHtml::encode($model->Tecnicas_Recoleccion_Datos); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Metodologias')); ?>:</b>
	<p><?php echo CHtml::encode($model->Metodologias); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Referencias')); ?>:</b>
	<p><?php echo CHtml::encode($model->Referencias); ?></p>
	<br />

	
