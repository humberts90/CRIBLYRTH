		<style>
			.contenido{
				backgraund: #fffffff;
				margin: 0 0 0 -53px;
			}
			.espacio{
				width: 0px;
				heigth: 0px;
			}
		
		</style>
 <script>
    $(document).ready(function(){
      var timer = setInterval( MoveCarrusel, 3000);
      function MoveCarrusel(){
        var lifirst=$('#carrusel-container li:first');
        lifirst.slideUp(700,function(){
        $('#carrusel-container li:last').after(lifirst);
        lifirst.css({"display" : "block"});
        });
      }
    })
  </script>	
		<div class="contenido">
			<div class="degradadoar">
				<div class="imagencentrar">
					<!-- lista Imagenes dinamica -->
					<div id="imagen">
						<div class="paginas"></div>
						<ul>
							<li>
								<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/imadina/ima1.png'); ?>
								<!--<div class="barra"></div>
								<p><a href="#" title="Foto 1"> Nueva pagina POSTGRADO UNET  </a></p>-->
							</li>
							<li>
								 <?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/imadina/ima2.png'); ?>
							</li>
							<li>
								<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/imadina/ima3.png'); ?>
								<!--   <div class="barra"></div>
								<p><a href="#" title="Foto 5"> titulo 5 </a></p>-->
							</li>
						</ul>
					</div>
					<div id="fondoPeriodico">
						<div class="logonoticias"></div>
						<span><h3>Noticias</h3></span>
						<div id="dinamicnoticias" >
							<!--<span><h3>Noticias</h3></span>-->
							<div id="carrusel-container">
								<ul>
									<?php foreach ($model as $not) { ?>
									<li>
										<div class="sec">
											<?php echo $not->Titulo; ?>
										</div>
										<div class="sec_enlace">
											<?php echo CHtml::link('<<'.date("d/m/Y",strtotime($not->Fecha)).'>>',array('site/noticia','id'=>$not->id)); ?>
											
										</div>
									<?php }?>
										
									 </li>
								 </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="degradadoab">
				<div class="espacio"></div>
				<div class="sec">
					<div class="sec_title">
						<h4>Cartelera</h4>
					</div>
					<div class="inform">
						<div class="vineta"></div>
						<?php echo CHtml::link('
						<p class="letrasoscuras">
							Lorem ipsum ad his scripta blandit eirmod consectetuer
						</p>
						<p class="letrasclaras">
							eum fastidii accumsan euripidis in...
						</p> ',
								array('site/Cartelere')); ?>
						
					</div>
					<div class="inform">
						<div class="vineta"></div>
						<?php echo CHtml::link('
						<p class="letrasoscuras">
							Lorem ipsum ad his scripta blandit eirmod consectetuer
						</p>
						<p class="letrasclaras">
							eum fastidii accumsan euripidis in...
						</p> ',
								array('site/Cartelere')); ?>
					</div>
					<div class="inform">
						<div class="vineta"></div>
						<?php echo CHtml::link('
						<p class="letrasoscuras">
							Lorem ipsum ad his scripta blandit eirmod consectetuer
						</p>
						<p class="letrasclaras">
							eum fastidii accumsan euripidis in...
						</p> ',
								array('site/Cartelere')); ?>
					</div>
					<div class="inform">
						<div class="vineta"></div>
						<?php echo CHtml::link('
						<p class="letrasoscuras">
							Lorem ipsum ad his scripta blandit eirmod consectetuer
						</p>
						<p class="letrasclaras">
							eum fastidii accumsan euripidis in...
						</p> ',
								array('site/Cartelere')); ?>
					</div>
					<div class="inform">
						<div class="vineta"></div>
						<?php echo CHtml::link('
						<p class="letrasoscuras">
							Lorem ipsum ad his scripta blandit eirmod consectetuer
						</p>
						<p class="letrasclaras">
							eum fastidii accumsan euripidis in...
						</p> ',
								array('site/Cartelere')); ?>
					</div>
				</div>
				<div class="sec" style="width:400px;">
					<div class="sec_title" style="height:20px;"></div>
					<div class="colorfondo">
								<ul class="enlacesredon">
							<li>								
								<?php echo CHtml::link('<div class="ncaja">
									<p class="letraspequenas">
										Conócenos
									</p>
									<p class="letrasgrandes">
										MISIÓN Y VISIÓN
									</p>
								</div> <div class="icono"></div>',
								array('site/mision')); ?>								 
							</li>
							<li>
							<?php echo CHtml::link('<div class="ncaja">
									<p class="letraspequenas">
										¿Quienes somos?
									</p>
									<p class="letrasgrandes">
										COMISIÓN TAP
									</p>
								</div> <div class="iconolupa"></div>',
								array('site/contact')); ?>							
							</li>
							<li>
							<?php echo CHtml::link('<div class="ncaja">
									<p class="letraspequenas">
										Descarga de 
									</p>
									<p class="letrasgrandes">
										DOCUMENTOS
									</p>
								</div> <div class="iconolista"></div> ',
								array('site/docu')); ?>					
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>