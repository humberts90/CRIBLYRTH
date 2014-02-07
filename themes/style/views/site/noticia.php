<div class="cuerpo">
            	<div class="tituloCom"><h3><?php echo $model->Titulo; ?></h3></div>
            	<?php echo date("d/m/Y",strtotime($model->Fecha));?>
        </br>
            <?php echo $model->Descripcion; ?>
        </br>
        <?php echo CHtml::link('Regresar',array('site/index')); ?>
</div>