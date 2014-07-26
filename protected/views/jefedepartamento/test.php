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
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
         <b><?php echo CHtml::encode($model->getAttributeLabel('Introduccion')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">

	<p><?php echo CHtml::encode($model->Introduccion); ?></p>
	<br />
	    </div>
    </div>
  </div>
  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
         <b><?php echo CHtml::encode($model->getAttributeLabel('Planteamiento_Problema')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Planteamiento_Problema); ?></p>
	<br />
	    </div>
    </div>
  </div>
 <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        <b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_General')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Objetivo_General); ?></p>
	<br />
	    </div>
    </div>
  </div>
	<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        <b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo_especifico')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse ">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Objetivo_especifico); ?></p>
	<br />
	    </div>
    </div>
  </div>

<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
        <b><?php echo CHtml::encode($model->getAttributeLabel('Justificacion_Importancia')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Justificacion_Importancia); ?></p>
	<br />
	    </div>
    </div>
  </div>
<div class="panel-group" id="accordion">
   <div class="panel-heading">>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
        <b><?php echo CHtml::encode($model->getAttributeLabel('Alcance_Delimitaciones')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Alcance_Delimitaciones); ?></p>
	<br />
	    </div>
    </div>
  </div>
	<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
       <b><?php echo CHtml::encode($model->getAttributeLabel('Antecedentes')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Antecedentes); ?></p>
	<br />
	    </div>
    </div>
  </div>
  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
      <b><?php echo CHtml::encode($model->getAttributeLabel('Bases_Teoricas')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Bases_Teoricas); ?></p>
	<br />
	    </div>
    </div>
  </div>
<div class="panel-group" id="accordion">
   <div class="panel-heading">>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
     <b><?php echo CHtml::encode($model->getAttributeLabel('Bases_Legales')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Bases_Legales); ?></p>
	<br />
	    </div>
    </div>
  </div>
<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
     <b><?php echo CHtml::encode($model->getAttributeLabel('Definicion_Terminos')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Definicion_Terminos); ?></p>
	<br />
	    </div>
    </div>
  </div>
<div class="panel-group" id="accordion">
   <div class="panel-heading">>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
    <b><?php echo CHtml::encode($model->getAttributeLabel('Enfoque_Investigacion')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Enfoque_Investigacion); ?></p>
	<br />
	    </div>
    </div>
  </div>
	<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
    <b><?php echo CHtml::encode($model->getAttributeLabel('Tipo_Nivel_Invesstigacion')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Tipo_Nivel_Invesstigacion); ?></p>
	<br />
	    </div>
    </div>
  </div>
	<div class="panel-group" id="accordion">
   <div class="panel-heading">>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">
    <b><?php echo CHtml::encode($model->getAttributeLabel('Diseno_Investigacion')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Diseno_Investigacion); ?></p>
	<br />
	    </div>
    </div>
  </div>
		<div class="panel-group" id="accordion">
   <div class="panel-heading">>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">
    <b><?php echo CHtml::encode($model->getAttributeLabel('Poblacion_Muestra')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Poblacion_Muestra); ?></p>
	<br />
	    </div>
    </div>
  </div>

		<div class="panel-group" id="accordion">
   <div class="panel-heading">>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFiveteen">
   	<b><?php echo CHtml::encode($model->getAttributeLabel('Tecnicas_Recoleccion_Datos')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Tecnicas_Recoleccion_Datos); ?></p>
	<br />
	    </div>
    </div>
  </div>
			<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">
   	<b><?php echo CHtml::encode($model->getAttributeLabel('Metodologias')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Metodologias); ?></p>
	<br />
	    </div>
    </div>
  </div>
  			<div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">
   	<b><?php echo CHtml::encode($model->getAttributeLabel('Referencias')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode($model->Referencias); ?></p>
	<br />
	    </div>
    </div>
  </div>

	



	
	

	

	<?php 

	if($model->P03_id!='1'){

	echo CHtml::link(CHtml::encode("Evaluar"), array('evalua', 'id'=>$model->id)); 

	}

	?>
	<br />

