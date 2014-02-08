<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="oferta">
<div class=" espacio"></div>
	<div class="basemenu">
	<?php
		
		$this->beginwidget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
		<div class="cuerpobase">
		<div class="content">
			<?php echo $content; ?>
			
		</div>	
	</div><!-- content -->
	<div class=" espacio"></div>
</div>
<?php $this->endContent(); ?>