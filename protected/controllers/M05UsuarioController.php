<?php

class M05UsuarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(		
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'roles'=>array('Administrador'),
					'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
					'actions'=>array('Delete'),
					'roles'=>array('Administrador'),
					'users'=>array('@'),
			),
			

			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new M05Usuario;
		$model_2=new M01Profesor;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['M05Usuario']))
		{
			$model->attributes=$_POST['M05Usuario'];
			$contrasena=$_POST['M05Usuario']['Clave'];
			$model->Clave=$model->hashPassword($contrasena,$session=$model->generateSalt());
			$model->session=$session;
			if($model->save())
			{
				$modelRol = P01Rol::model()->findAll();
				
				foreach($modelRol as $rol)
				{
					if($_POST["Rol"][$rol->id]==1)
					{
						$item = new T08UsuarioHasRol;
						
						$item->M05_id=$model->id;
						$item->P01_id=$rol->id;
						
						$item->save();
						$auth=Yii::app()->authManager;
						$nombre=P01Rol::model()->find("id=".$item->P01_id);
						$auth->assign($nombre->nombre,$model->Usuario);
						if($nombre->id==3){
							$model_2->Cedula=$model->Cedula;
							$model_2->Apellido=$model->Apellido;
							$model_2->Nombre=$model->Nombre;
							$model_2->Correo_UNET=$model->Correo_Electronico;
							$model_2->save();
						}

					}
				}
			
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$auth=Yii::app()->authManager;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$asocia=T08Usuario_has_rol::model()->findAll('M05_id='.$id);
		$var=$id." ".count($asocia);
		
		if(isset($_POST['M05Usuario']))
		{

			

		
				foreach ($asocia as $tem) {
					$auth->revoke($tem->p01->nombre,$model->Usuario);
					$tem->delete();
				}
		



		

			$model->attributes=$_POST['M05Usuario'];
			$contrasena=$_POST['M05Usuario']['Clave'];
			$model->Clave=$model->hashPassword($contrasena,$session=$model->generateSalt());
			$model->session=$session;
			if($model->save())
			{
				$modelRol = P01Rol::model()->findAll();
				
				foreach($modelRol as $rol)
				{
					if($_POST["Rol"][$rol->id]==1)
					{
						$item = new T08UsuarioHasRol;
						
						$item->M05_id=$model->id;
						$item->P01_id=$rol->id;
						
						$item->save();
						$auth=Yii::app()->authManager;
						$nombre=P01Rol::model()->find("id=".$item->P01_id);
						$auth->assign($nombre->nombre,$model->Usuario);
					}
				}
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'varia'=>$var,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionBorrar($id)
	{
		$model=M05Usuario::model()->findByPk($id);
		$items = T08UsuarioHasRol::model()->findAll("M05_id=".$id);
		$auth=Yii::app()->authManager;

		
		foreach($items as $item){			
		$auth->revoke($item->p01->nombre,$model->Usuario);
		$item->delete();
		}

		
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('M05Usuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new M05Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['M05Usuario']))
			$model->attributes=$_GET['M05Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return M05Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=M05Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param M05Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='m05-usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
