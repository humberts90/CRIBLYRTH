<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Evaluar planes de trabajo'=>array('pasantias'),
	'Detalles del plan de trabajo',

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

			<?php } 
      $pas2=T02PasantiaHasUsuario::model()->find("M04_id = ".$model->id);?>
      <b><?php echo "Tutor Externo"; ?>:</b>
      <?php echo CHtml::encode($pas2->m07->Nombre." ".$pas2->m07->Apellido); ?>
      <br />

</br>
<?php 

  if($model->P03_id!='1'){

  echo CHtml::link(CHtml::encode("Evaluar este plan de trabajo"), array('evaluaP', 'id'=>$model->id),array('class'=>'btn btn-default btn-lg pull-left')); 

  }

  ?>
</br>
</br>
</br>
<b><?php echo CHtml::encode($model->getAttributeLabel('Titulo')); ?>:</b>
	<p><?php echo CHtml::encode(strip_tags($model->Titulo)); ?></p>
	<br />

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Planteamiento Problema')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	<p><?php echo CHtml::encode(strip_tags($model->Planteamiento_Problema)); ?></p>
      </div>
    </div>
  </div>
  
  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">	
	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo General')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">	
	<p><?php echo CHtml::encode(strip_tags($model->Objetivo_General)); ?></p>
      </div>
    </div>
  </div>
 

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">	
	<b><?php echo CHtml::encode($model->getAttributeLabel('Objetivo especifico')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">	
	<p><?php echo CHtml::encode(strip_tags($model->Objetivo_Especifico)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Descripcion Trabajo')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">		
	<p><?php echo CHtml::encode(strip_tags($model->Descripcion_Trabajo)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Antecedentes')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">		
	<p><?php echo CHtml::encode(strip_tags($model->Antecedentes)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Metodologia')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">	
	<p><?php echo CHtml::encode(strip_tags($model->Metodologia)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Productos Desarrollo')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">	
	<p><?php echo CHtml::encode(strip_tags($model->Productos_Desarrollo)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Inscripcion')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse">
      <div class="panel-body">		
	<p><?php echo CHtml::encode(strip_tags($model->Fecha_Inscripcion)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Defensa')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse">
      <div class="panel-body">	
	<p><?php echo CHtml::encode(strip_tags($model->Fecha_Defensa)); ?></p>
      </div>
    </div>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel-heading">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
	<b><?php echo CHtml::encode($model->getAttributeLabel('Fecha Aprobacion')); ?>:</b>
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse">
      <div class="panel-body">		
	<p><?php echo CHtml::encode(strip_tags($model->Fecha_Aprobacion)); ?></p>
      </div>
    </div>
  </div>
	
	<?php echo CHtml::link(CHtml::encode("Ver Cronograma de Actividades"), array('cronograma', 'id'=>$model->id)); ?>
	<br />
	<br />
	

	<br />
