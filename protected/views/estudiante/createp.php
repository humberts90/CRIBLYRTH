<!-- Temporal -->	
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/css/jquery.steps.css" type="text/css"> 	
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/jquery/jquery-1.10.2.min.js"></script>
		
 	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/jquery/jquery.steps.js"></script>	

	

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
");
?>

<h1> Cargar Proyecto de Trabajo</h1>

<?php $this->renderPartial('_form_p', array('Usuario'=>$Usuario,'model_1'=>$model_1,'model_2'=>$model_2,'model_3'=>$model_3,'model_4'=>$model_4,)); ?>