<?php
/* @var $this M05UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inicio',
);

echo $this->renderPartial('menu', array('usu'=>$Usuario));

?>
<div class="col-lg-8">
	<h1> Detalle del historial de <?php echo $us->Nombre.' '.$us->Apellido;?> </h1>

	<table border="0" style="width: 100%" >
  <tr>
    
    <td bgcolor="#93AAD3"><h4>Titulo</h4></td>
    <td bgcolor="#93AAD3"><h4>Estado</h4></td>
    <td bgcolor="#93AAD3"><h4>Fecha de defensa</h4></td>
    
  </tr>

    <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'view_his_Detalle',
    )); ?>
    </table>
	<!--<?php /*echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); */?> 
	search-form -->

	</br>
					
</div>
