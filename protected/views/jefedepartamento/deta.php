<?php
/* @var $this M05UsuarioController */
/* @var $dataProvider CActiveDataProvider */


echo $this->renderPartial('menu', array('usu'=>$Usuario));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#m01-profesor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1> Detalle Profesor</h1>

<div class="col-lg-8">

			
</BR>
	<TABLE BORDER="0">
		<TR>
			<TD style="min-width:150px"><h4>Cedula    </h4></TD> <TD><?php echo "     ".$model->Cedula ?></TD>
		</TR>
		<TR>
			<TD><h4>Nombre Completo   </h4></TD><TD><?php echo "     ".$model->Nombre." ".$model->Apellido ?></TD> 
		</TR>
		<TR>
			<TD><h4>Correo Electrónico </h4></TD><TD><?php "     ".$model->Correo_UNET ?></TD>
		</TR>
		<TR>
	</TABLE>


		
					
</div>
