<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Mirrored from postgrado.unet.edu.ve/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 20 Jan 2014 15:49:43 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- /Added by HTTrack -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<link rel="Shortcut icon" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.ico" type="image/x-icon" />	
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
		<link rel="Shortcut Icon" type="image/x-icon" href="Extra3dLogos/icono.png" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-glyphicons.css "/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css "/>
		<script type="text/javascript" rel="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery-1.7.2.min.js" ></script>
		<script type="text/javascript" rel="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery.cycle.all.js" ></script>
		<script type="text/javascript" rel="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/fotos.js" ></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>scripts/buscar.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>scripts/noticias.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap.js"></script>	
	</head>
	<body>
		<div class="principal" >
			<div class="banner">
				<div class="margensuperior"></div>
				<a class="enlace" href="http://www.unet.edu.ve/" target="_blank"> <div class="logounet"></div> </a>
				
				<div class="logoinf">
					<span><h1></h1></span>
				</div>
				<div class="inicio">					
						<?php 
							if(!Yii::app()->user->isGuest ){
								echo '<div class= "ini">';
								echo " ".Yii::app()->user->name." ";
								echo CHtml::link(CHtml::encode('(Cerrar sesion)'), array('/site/logout'));
								echo '</div>';
							}
							else{
								if(strcmp(Yii::app()->controller->action->id,"login")!=0){
									echo '<div class= "ini_2" >';
									
									?>
									<form method="POST" action="../site/login" name="login-form" id="logintop" class="form-inline pull-right" >
									<div class="form-group">
									<input name="usuario" id="usuario" type="text" class="form-control input-sm" placeholder="Usuario">
									</div>
									<div class="form-group">
									<input name="contrasena" id="contrasena" type="password" class="form-control input-sm" placeholder="Contraseña">
									</div>
									<button type="submit" class="btn btn-default" > Iniciar sesión </button>
									<div style="color:#93AAD3">							

									</div>
									</form>

									<?php
									echo '</div>';
								}
							}
						 ?>					
				</div>
		
				<div class="menu">
				<?php 		

					$ruta="/site/index";		

					if(Yii::app()->authManager->checkAccess('Administrador',Yii::app()->user->id)){
						$ruta='/site/admin';
					
					}
					if(Yii::app()->authManager->checkAccess('Profesor',Yii::app()->user->id)){
						$ruta='/profesor/index';
					
					}
					if(Yii::app()->authManager->checkAccess('Empresa',Yii::app()->user->id)){
						$ruta='/empresa/index';
					
					}	
					if(Yii::app()->authManager->checkAccess('Alumno',Yii::app()->user->id)){
						$ruta='/Estudiante/index';
					
					}	
					if(Yii::app()->authManager->checkAccess('Comisión del Tap',Yii::app()->user->id)){
						$ruta='/comision/index';
					
					}	
					if(Yii::app()->authManager->checkAccess('Secretaria',Yii::app()->user->id)){
						$ruta='/secretaria/index';
					
					}	
					if(Yii::app()->authManager->checkAccess('Jefe del Departamento',Yii::app()->user->id)){
						$ruta='/jefedepartamento/index';
					
					}	


					if(strcmp(Yii::app()->getController()->getId(),"oferta")==0&&Yii::app()->user->isGuest){
						$ruta="/site/index";
					}				
					

					

					$this->widget('zii.widgets.CMenu',array(
					'encodeLabel'=>false,
					'id'=>'menu4',
					'items'=>array(
						array('label'=>'<p class="letrasgrandes">INICIO</p>',
									'url'=>array($ruta)),
						array('label'=>'<p class="letrasgrandes">Ofertas TAP</p>
									<p class="letraspequenas">Propuestas en Tesis y Pasantías</p>', 'url'=>array('/oferta/index')),
						array('label'=>'<p class="letrasgrandes">Decidí hacer Tesis</p>
									<p class="letraspequenas">¿Y ahora qué?</p>', 'url'=>array('/site/tesis', 'view'=>'about')),
						array('label'=>'<p class="letrasgrandes">Decidí hacer Pasantías</p>
									<p class="letraspequenas">¿Y ahora qué?</p>', 'url'=>array('/site/pasantias')),
					
						
					),
				)); ?>
				</div>
				<div class="lineazul"></div>

			</div>
				<div class="content">
				<<?php echo $content; ?>
				</div>
			<!-- Inicio pie de pag-->
			<div class="piedepag">
				<div class="sec">
					<div class="line"></div>
					<div class="titulo">
						<h4>Informaci&oacuten General</h4>
					</div>
					<div class="enlaces">					
						<?php echo CHtml::link('<h7>
												Inicio
												</h7>',
								array('site/index')); ?>
					</div>
					<div class="enlaces">
						<?php echo CHtml::link('<h7>
												Ofertas Tap
												</h7>',
							 array('site/#')); ?>
					</div>
					<div class="enlaces">
					<?php echo CHtml::link('<h7>
												Decidí hacer tesis 
												</h7>',
								array('site/tesis')); ?>
					</div>
					<div class="enlaces">
							<?php echo CHtml::link('<h7>
												Decidí hacer pasantias 
												</h7>',
								array('site/pasantias')); ?>
					</div>
				
				</div>
				<div class="sec2">
					<div class="line"></div>
					<div class="titulo">
						<h4>Informaci&oacuten de inter&eacutes</h4>
					</div>
					<div class="enlaces">						
							<?php echo CHtml::link('<h7>
												Misión y Visión 
												</h7>',
								array('site/#')); ?>
					</div>
					<div class="enlaces">
							<?php echo CHtml::link('<h7>
												Comisión TAP
												</h7>',
								array('site/contact')); ?>
					</div>
					<div class="enlaces">
							<?php echo CHtml::link('<h7>
												Descarga de Documentos
												</h7>',
								array('site/documento')); ?>
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
						<a class="enlace" href="" title="Ir a Mapa de Sitio">
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
					<a title="Ir a twitter" href="" target="_blank">
					<div class="twitter">
						<span>twitter</span>
					</div></a>
					<div class="enlaces">
						<h4>@tapinformatica</h4>
					</div>
					<div class="line"></div>
					<div class="enlaces2">
						<span class="letblancas">Tel&eacute;fono</span>
						+58 (276) 000-0000
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