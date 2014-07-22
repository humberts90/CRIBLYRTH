<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>



<div class="form" >
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div align= "center">
		<h1>Inicio de Sesion</h1>

		<p>Por favor complete el siguiente formulario con sus datos de acceso:</p>
	<table border="0" style="width: 30%"  align= "center" bgcolor="#93AAD3" >
</div>		
  <tr>
    <td  ><h4><?php echo $form->labelEx($model,'username').": "; ?></h4></td>
    <td>
    	<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
    </td>
    </tr>
    <tr>
      <td  ><h4><?php echo $form->labelEx($model,'password').": "; ?></h4></td>
    <td ><?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?></td>
    
  </tr>
  <tr>
  	<td colspan="2" align="center">
  			
		<?php echo $form->checkBox($model,'rememberMe'); ?>
	
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	
  	</td>
  </tr>
   <tr>
  	<td colspan="2" align="center">
  
		<?php echo CHtml::submitButton('Entrar'); ?>
	
  	</td>
  </tr>
</table>





</br>

	

<?php $this->endWidget(); ?>
</div><!-- form -->
