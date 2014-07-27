<!-- Temporal -->	
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/css/jquery.steps.css" type="text/css"> 	
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/jquery/jquery-1.10.2.min.js"></script>
		
 	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/jquery/jquery.steps.js"></script>	
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/jquery/nicEdit-latest.js"></script>	
    <!--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> NO BORRAR -->

	

<?php


$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Cargar Plan de Trabajo',
);


Yii::app()->clientScript->registerScript('wizard', '
	$("#wizard").steps({

				headerTag: "h2",
				bodyTag: "section",                 
				transitionEffect: "slideLeft",
                stepsOrientation: "vertical",
				onFinishing: function (event, currentIndex) { return true; },
				onFinished: function (event, currentIndex)
				{
					var form = $(this);                             
					// Submit form input
					var text = $("#myInstance1").html();
					$("#Titulo").val(text);
					text = $("#myInstance2").html();
					$("#Planteamiento_Problema").val(text);
					text = $("#myInstance3").html();
					$("#Descripcion_Trabajo").val(text);
					text = $("#myInstance4").html();
					$("#Objetivo_General").val(text);
					text = $("#myInstance5").html();
					$("#Objetivo_Especifico").val(text);
					text = $("#myInstance6").html();
					$("#Antecedentes").val(text);
					text = $("#myInstance7").html();
					$("#Metodologia").val(text);
					text = $("#myInstance8").html();
					$("#Productos_Desarrollo").val(text);

					$("#pasantias-form").submit();
				},
				labels: {
					current: "current step:",
					pagination: "Paginación",
					finish: "Finalizar",
					next: "Siguiente",
					previous: "Atras",
					loading: "Cargando ..."
				}                     
			});
');

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
	//<![CDATA[
							bkLib.onDomLoaded(function() {
							var myNicEditor = new nicEditor();
							myNicEditor.setPanel('myNicPanel1');
							myNicEditor.setPanel('myNicPanel2');
							myNicEditor.setPanel('myNicPanel3');
							myNicEditor.setPanel('myNicPanel4');
							myNicEditor.setPanel('myNicPanel5');
							myNicEditor.setPanel('myNicPanel6');
							myNicEditor.setPanel('myNicPanel7');
							myNicEditor.setPanel('myNicPanel8');

							myNicEditor.addInstance('myInstance1');
							myNicEditor.addInstance('myInstance2');
							myNicEditor.addInstance('myInstance3');
							myNicEditor.addInstance('myInstance4');
							myNicEditor.addInstance('myInstance5');
							myNicEditor.addInstance('myInstance6');
							myNicEditor.addInstance('myInstance7');
							myNicEditor.addInstance('myInstance8');
							});
							//]]>
");
?>

<h1> Cargar Proyecto de Trabajo</h1>

<?php $this->renderPartial('_form_p', array('Usuario'=>$Usuario,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,'model_5'=>$model_5,)); ?>