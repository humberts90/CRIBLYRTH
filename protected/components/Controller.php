<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
		public $correo='sistematapunet@gmail.com';
	public $clave_coreo='sistematap';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public function correo_e($para,$contenido,$asunto){
		
		Yii::import('application.extensions.phpmailer.JPhpMailer');
		$mailer = new JPhpMailer;
		$mailer->IsSMTP();
		$mailer->IsHTML(true);
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = "ssl";
		$mailer->Host = "smtp.gmail.com";
		$mailer->Port = 465;
		$mailer->Username = $this->correo;
		$mailer->Password = $this->clave_coreo;
		$mailer->From = "sistematapunet@gmail.com";
		$mailer->FromName = "Sistema del Tap";
		$mailer->AddAddress($para);
		$mailer->Subject = $asunto;
		$mailer->Body = $contenido;
		$mailer->Send();
	}
}