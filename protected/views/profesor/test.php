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
<?php echo CHtml::link(CHtml::encode("Agregar Area de Conocimiento"), array('areas', 'id'=>$model->id)); ?></b>
</br>
<b>
<?php echo CHtml::link(CHtml::encode("Descargar constancia"), array('const', 'id'=>$model->id)); ?></b>
</br>
</br>
<b><?php echo CHtml::encode($model->getAttributeLabel('Introduccion')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Introduccion)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Planteamiento_Problema')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Planteamiento_Problema)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_General')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Objetivo_General)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_especifico')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Objetivo_especifico)); ?></p>
	<br />	
	<b><?php echo CHtml::encode($model->getAttributeLabel('Justificacion_Importancia')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Justificacion_Importancia)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Alcance_Delimitaciones')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Alcance_Delimitaciones)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Antecedentes')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Antecedentes)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Bases_Teoricas')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Bases_Teoricas)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Bases_Legales')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Bases_Legales)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Definicion_Terminos')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Definicion_Terminos)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Enfoque_Investigacion')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Enfoque_Investigacion)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tipo_Nivel_Invesstigacion')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Tipo_Nivel_Invesstigacion)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Diseno_Investigacion')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Diseno_Investigacion)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Poblacion_Muestra')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Poblacion_Muestra)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Tecnicas_Recoleccion_Datos')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Tecnicas_Recoleccion_Datos)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Metodologias')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Metodologias)); ?></p>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('Referencias')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Referencias)); ?></p>
	<br/>
	<b><?php echo CHtml::encode($model->getAttributeLabel('fecha_val')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->fecha_val)); ?></p>
	<br /> 
	<b><?php echo CHtml::encode($model->getAttributeLabel('vacantes')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->vacantes)); ?></p>
	<br />
	<b><?php echo CHtml::encode($model->getAttributeLabel('Lapso_Academico_defensa')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Lapso_Academico_defensa)); ?></p>
	<br />

	
