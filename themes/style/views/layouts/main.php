<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Mirrored from postgrado.unet.edu.ve/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 20 Jan 2014 15:49:43 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- /Added by HTTrack -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="Shortcut Icon" type="image/x-icon" href="Extra3dLogos/icono.png" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
		<link rel="Shortcut Icon" type="image/x-icon" href="Extra3dLogos/icono.png" />
		<script type="text/javascript" rel="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery-1.7.2.min.js" ></script>
		<script type="text/javascript" rel="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery.cycle.all.js" ></script>
		<script type="text/javascript" rel="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/fotos.js" ></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>scripts/buscar.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>scripts/noticias.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="principal" >
			<div class="banner">
				<div class="margensuperior"></div>
				<a class="enlace" href="http://www.unet.edu.ve/" target="_blank"> <div class="logounet"></div> </a>
				
				<div class="logoinf">
					<span><h1></h1></span>
				</div>

				<div class="menu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'encodeLabel'=>false,
					'id'=>'menu4',
					'items'=>array(
						array('label'=>'<p class="letrasgrandes">INICIO</p>',
									'url'=>array('/site/index')),
						array('label'=>'<p class="letrasgrandes">Ofertas TAP</p>
									<p class="letraspequenas">Propuestas en Tesis y Pasantías</p>', 'url'=>array('/m05Usuario/index')),
						array('label'=>'<p class="letrasgrandes">Decidí hacer Tesis</p>
									<p class="letraspequenas">¿Y ahora qué?</p>', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'<p class="letrasgrandes">Decidí hacer Pasantías</p>
									<p class="letraspequenas">¿Y ahora qué?</p>', 'url'=>array('/site/contact')),
						array('label'=>'<p class="letrasgrandes">Inicio de sesión</p>
									<p class="letraspequenas">Adaptado a tus necesidades</p>', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
				</div>
				<<div class="lineazul"></div>

			</div>
				<div class="content">
				<<?php echo $content; ?>
				</div>
			<!-- Inicio pie de pag-->
			<div class="piedepag">
				<div class="sec">
					<div class="line"></div>
					<div class="titulo">
						<h4>Oferta Acad&eacute;mica</h4>
					</div>
					<div class="enlaces">
						<a href="maestrias.html" title="Ir a Maestr&iacute;as">
						<h7>
							Maestr&iacute;as
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="especializaciones.html" title="Ir a Especializaciones">
						<h7>
							Especializaciones
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="especializaciones_tecnicas.html" title="Ir a Especializaciones T&eacute;cnicas">
						<h7>
							Especializaciones T&eacute;cnicas
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="academia_cisco.html" title="Ir a Academia Cisco">
						<h7>
							Academia Cisco
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="mejoramiento_profesional.html" title="Ir a Cusros de Mejoramiento Personal">
						<h7>
							Cursos de Mejoramiento Profesional
						</h7></a>
					</div>
				</div>
				<div class="sec2">
					<div class="line"></div>
					<div class="titulo">
						<h4>Procedimientos de Estudiantes</h4>
					</div>
					<div class="enlaces">
						<a class="enlace" href="admision_preinscripcion.html" title="Ir a Preinscripcion">
						<h7>
							Preinscripcion
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="admision_lista_selec.html" title="Ir a Listado de seleccionados">
						<h7>
							Listado de Seleccionados
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="estudiantes_carnetizacion.html" title="Ir a Carnetizaci&oacute;n">
						<h7>
							Carnetizaci&oacute;n
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="estudiantes_pago_de_matricula.html" title="Ir a Pago de Matr&iacute;cula e Inscripci&oacute;n">
						<h7>
							Pago de Matr&iacute;cula e Inscripci&oacute;n
						</h7></a>
					</div>
				</div>
				<div class="sec3">
					<div class="line"></div>
					<div class="titulo">
						<h4>Enlaces Directos</h4>
					</div>
					<div class="enlaces">
						<a class="enlace" href="http://www.unet.edu.ve/" title="Ir a UNET" target="_blank">
						<h7>
							UNET
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="http://control.unet.edu.ve/" title="Ir a Control de estudios" target="_blank">
						<h7>
							Control de Estudios
						</h7></a>
					</div>
					<div class="enlaces">
						<a class="enlace" href="https://uvirtual.unet.edu.ve/" title="Ir a UVirtual" target="_blank">
						<h7>
							UNETVirtual
						</h7></a>
					</div>
					<div class="titulo">
						<h4>Otros Enlaces</h4>
					</div>
					<div class="enlaces">
						<a class="enlace" href="mapadesitio.html" title="Ir a Mapa de Sitio">
						<h7>
							Mapa de Sitio
						</h7></a>
					</div>
				</div>
				<div class="sec4">
					<div class="line"></div>
					<div class="titulo">
						<h4>Cont&aacute;ctenos</h4>
					</div>
					<div class="line"></div>
					<a title="Ir a twitter" href="http://twitter.com/postgradounet" target="_blank">
					<div class="twitter">
						<span>twitter</span>
					</div></a>
					<div class="enlaces">
						<h4>@postgradounet</h4>
					</div>
					<div class="line"></div>
					<div class="enlaces2">
						<span class="letblancas">Tel&eacute;fono</span>
						+58 (276) 353-1612
					</div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
					<div class="enlaces3" align="right">
						<h20>
							&copy; 2014 Universidad Nacional
						</h20>
					</div>
					<div class="enlaces3" align="right">
						<h20>
							Experimental del T&aacute;chira
						</h20>
					</div>
					<div class="enlaces3" align="right" >
						<h20>
							San Crist&oacute;bal, Venezuela
						</h20>
					</div>
				</div>
			</div>
			<!-- fin pie de pag-->
		</div>
		</div>
	</body>
	<!-- Mirrored from postgrado.unet.edu.ve/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 20 Jan 2014 15:50:52 GMT -->
</html>