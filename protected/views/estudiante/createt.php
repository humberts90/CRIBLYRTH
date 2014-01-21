<!-- Temporal -->	
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/css/jquery.steps.css" type="text/css"> 	
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/jquery/jquery-1.10.2.min.js"></script>
		
 	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/jquery/jquery.steps.js"></script>	
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
');


?>





<h1> Cargar Anteproyecto de Tesis</h1>

<?php $this->renderPartial('_form_t', array('Usuario'=>$Usuario,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4)); ?>