

<!-- Temporal -->	
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/css/jquery.steps.css" type="text/css"> 	
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/jquery/jquery-1.10.2.min.js"></script>
		
 	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/jquery/jquery.steps.js"></script>	
 	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/jquery/nicEdit-latest.js"></script>	
    <!--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> NO BORRAR -->



<?php


$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Cargar Tesis',
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
					$("#intro").val(text);
					text = $("#myInstance2").html();
					$("#Planteamiento_Problema").val(text);
					text = $("#myInstance3").html();
					$("#Objetivo_General").val(text);
					text = $("#myInstance4").html();
					$("#Objetivo_especifico").val(text);
					text = $("#myInstance5").html();
					$("#Justificacion_Importancia").val(text);
					text = $("#myInstance6").html();
					$("#Alcance_Delimitaciones").val(text);
					text = $("#myInstance7").html();
					$("#Antecedentes").val(text);
					text = $("#myInstance8").html();
					$("#Bases_Teoricas").val(text);
					text = $("#myInstance9").html();
					$("#Bases_Legales").val(text);
					text = $("#myInstance10").html();
					$("#Definicion_Terminos").val(text);
					text = $("#myInstance11").html();
					$("#Enfoque_Investigacion").val(text);
					text = $("#myInstance12").html();
					$("#Tipo_Nivel_Invesstigacion").val(text);
					text = $("#myInstance13").html();
					$("#Diseno_Investigacion").val(text);
					text = $("#myInstance14").html();
					$("#Poblacion_Muestra").val(text);
					text = $("#myInstance15").html();
					$("#Tecnicas_Recoleccion_Datos").val(text);
					text = $("#myInstance16").html();
					$("#Metologias").val(text);
					text = $("#myInstance17").html();
					$("#Referencias").val(text);
					$("#tesis-form").submit();
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

	//<![CDATA[
							bkLib.onDomLoaded(function() {
                                               /*         $("#wizard ul[role=menu]").append("<li aria-hidden=false style=display: block;><a id=guardar  aria-hidden=false href=#finish >Guardar Sin Enviar</a></li>").click(function(){
  $("#guardarPrev").val("activo"); 
 // $("#tesis-form").submit();
});*/
							var myNicEditor = new nicEditor();
							myNicEditor.setPanel("myNicPanel");
							myNicEditor.setPanel("myNicPanel1");
							myNicEditor.setPanel("myNicPanel2");
							myNicEditor.setPanel("myNicPanel3");
							myNicEditor.setPanel("myNicPanel4");
							myNicEditor.setPanel("myNicPanel5");
							myNicEditor.setPanel("myNicPanel6");
							myNicEditor.setPanel("myNicPanel7");
							myNicEditor.setPanel("myNicPanel8");
							myNicEditor.setPanel("myNicPanel9");
							myNicEditor.setPanel("myNicPanel10");
							myNicEditor.setPanel("myNicPanel11");
							myNicEditor.setPanel("myNicPanel12");
							myNicEditor.setPanel("myNicPanel13");
							myNicEditor.setPanel("myNicPanel14");
							myNicEditor.setPanel("myNicPanel15");
							myNicEditor.setPanel("myNicPanel16");

							myNicEditor.addInstance("myInstance1");
							myNicEditor.addInstance("myInstance2");
							myNicEditor.addInstance("myInstance3");
							myNicEditor.addInstance("myInstance4");
							myNicEditor.addInstance("myInstance5");
							myNicEditor.addInstance("myInstance6");
							myNicEditor.addInstance("myInstance7");
							myNicEditor.addInstance("myInstance8");
							myNicEditor.addInstance("myInstance9");
							myNicEditor.addInstance("myInstance10");
							myNicEditor.addInstance("myInstance11");
							myNicEditor.addInstance("myInstance12");
							myNicEditor.addInstance("myInstance13");
							myNicEditor.addInstance("myInstance14");
							myNicEditor.addInstance("myInstance15");
							myNicEditor.addInstance("myInstance16");
							myNicEditor.addInstance("myInstance17");
							});
							//]]>
                                                       
');

/*Yii::app()->clientScript->registerScript('boton','

 $("#wizard ul[role=menu]").append("<li aria-hidden=false style=display: block;><a id=guardar  aria-hidden=false href=#finish >Guardar Sin Enviar</a></li>").click(function(){
  $("#guardarPrev").val("activo"); 
 // $("#tesis-form").submit();
});

');*/
?>


<h1> Cargar Anteproyecto de Tesis</h1>

<?php $this->renderPartial('_form_t', array('Usuario'=>$Usuario,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,'model_5'=>$model_5)); ?>