

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 

	if(isset($_POST['usuario'])){

$model->username=$_POST['usuario'];

$model->password=$_POST['contrasena'];

		if($model->login()){
				if(Yii::app()->authManager->checkAccess('Administrador',Yii::app()->user->id)){
									$this->redirect(Yii::app()->user->returnUrl.'/site/admin');
							}
							if(Yii::app()->authManager->checkAccess('Jefe del Departamento',Yii::app()->user->id)){
								$this->redirect(Yii::app()->user->returnUrl.'/jefedepartamento/index');
							}
							if(Yii::app()->authManager->checkAccess('Comisión del Tap',Yii::app()->user->id)){
								$this->redirect(Yii::app()->user->returnUrl.'/comision/index');
							}
							if(Yii::app()->authManager->checkAccess('Profesor',Yii::app()->user->id)){
								$this->redirect(Yii::app()->user->returnUrl.'/profesor/index');
							}
							if(Yii::app()->authManager->checkAccess('Empresa',Yii::app()->user->id)){
								$this->redirect(Yii::app()->user->returnUrl.'/Empresa/index');
							}					
							if(Yii::app()->authManager->checkAccess('Alumno',Yii::app()->user->id)){
								$this->redirect(Yii::app()->user->returnUrl.'/estudiante/index');
							}
							if(Yii::app()->authManager->checkAccess('Secretaria',Yii::app()->user->id)){
								$this->redirect(Yii::app()->user->returnUrl.'/secretaria/index');
							}
		}else{
			$this->redirect(Yii::app()->user->returnUrl.'/site/login');
		}

}else{


					
?>

								<div align= "center">
								<h1>Inicio de Sesion</h1>

								<p>Por favor complete el siguiente formulario con sus datos de acceso:</p>
								<table border="0" style="width: 30%" align= "center" bgcolor="#93AAD3" >
								</div>
								<tr>
								<td ><h4><?php echo $form->labelEx($model,'username').": "; ?></h4></td>
								<td>
								<?php echo $form->textField($model,'username'); ?>
								<?php echo $form->error($model,'username'); ?>
								</td>
								</tr>
								<tr>
								<td ><h4><?php echo $form->labelEx($model,'password').": "; ?></h4></td>
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
<?php } ?>


<?php $this->endWidget(); ?>


