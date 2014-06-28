<?php

class ProfesorController extends Controller{
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
			   array('allow',  
						'roles'=>array('Administrador'),
						'users'=>array('@'),
				),	
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'roles'=>array('Profesor'),
					'users'=>array('@'),
				),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		
		);
	}

	public function actionIndex(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$this->render('index',array('Usuario'=>$tar,));
	}
	public function actionOferta_t()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M03Tesis;

		if(isset($_POST["M03Tesis"]))
		{
			$model->attributes=$_POST["M03Tesis"];

			$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");

			$model->Lapso_Academico_defensa = $_POST["M03Tesis"]["Lapso_Academico_defensa"];
			$model->P03_id = $modelStatus->id;

			if($model->save())
			{    
			
				$modelRelacion = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
				
				$modelAsoc = new T01TesisHasUsuario;
				$modelAsoc->M05_id = $tar->id;
				$modelAsoc->M03_id = $model->id;
				$modelAsoc->P02_id = $modelRelacion->id;

				$modelAsoc->save();

				$this->render('index',array('Usuario'=>$tar,));
			}

		}

		$this->render('oferta',array(
			'Usuario'=>$tar,
			'model'=>$model,
			
			));
	}

	public function actionOferta_p()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M04Pasantia;
		$modelExterno=new M07TutorExterno; 

		if(isset($_POST["M04Pasantia"]))
		{
			$model->attributes=$_POST["M04Pasantia"];

			$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");

			$model->Lapso_Academico_defensa = $_POST["M04Pasantia"]["Lapso_Academico_defensa"];
			$model->P03_id = $modelStatus->id;

			if($model->save())
			{
				$modelRelacion = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");
				
				$modelAsoc = new T02PasantiaHasUsuario;
				$modelAsoc->M05_id = $tar->id;
				$modelAsoc->M04_id = $model->id;
				$modelAsoc->P02_id = $modelRelacion->id;
				$modelAsoc->M07_id = $_POST["M07TutorExterno"]["id"]; 				

				$modelAsoc->save();

				$this->render('index',array('Usuario'=>$tar,));
			}

		}


		$this->render('ofertap',array(
			'Usuario'=>$tar,
			'model'=>$model,
			'externo'=>$modelExterno,
			));
	}


	//-----------------------------Constancias------------------------------------------
	public function actionConst($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$jefe_1=P01Rol::model()->find("nombre = 'Jefe del Departamento'");
		$jefe_2=T08UsuarioHasRol::model()->find("P01_id = ".$jefe_1->id);
		$jefe=M05Usuario::model()->findByPk($jefe_2->M05_id);
		$tesis=M03Tesis::model()->findByPk($id);
		$tes=P02TipoRelacion::model()->find("Descripcion = 'Tesista'" );
		$aso=T01TesisHasUsuario::model()->findALL('M03_id = '.$tesis->id.' AND P02_id = '.$tes->id);
		if(count($aso)>1){

			$nombre_c1=$aso[0]->m05->Nombre.' '.$aso[0]->m05->Apellido.' '.$aso[0]->m05->Cedula;
			$nombre_c2='</br>'.$aso[1]->m05->Nombre.' '.$aso[1]->m05->Apellido.' '.$aso[1]->m05->Cedula;
		}
		else{
		$nombre_c1=$aso[0]->m05->Nombre.' '.$aso[0]->m05->Apellido.' '.$aso[0]->m05->Cedula;
		$nombre_c2='</br>';	
		}

			// convertir a pdf

		 $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
		 $mPDF1->useOnlyCoreFonts = true;
		 $mPDF1->SetTitle(" Reporte");
		 $mPDF1->SetAuthor("Reporte");
		
		 $mPDF1->showWatermarkText = true;
		 $mPDF1->watermark_font = 'DejaVuSansCondensed';
		 $mPDF1->watermarkTextAlpha = 0.1;
		 $mPDF1->SetDisplayMode('fullpage');
		 $mPDF1->WriteHTML($this->renderPartial('cont_1',array(
			'Usuario'=>$tar,
			'jefe'=>$jefe,
			'tesis'=>$tesis,
			'nombre_1'=>$nombre_c1,
			'nombre_2'=>$nombre_c2,
			), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
		 $mPDF1->Output('Constancia'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
		 exit;


	}
	public function actionTesis(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=T01TesisHasUsuario::model()->findAll('M05_id = '.$tar->id);

		$criteria = new CDbCriteria();
		$criteria->select = array("*");
		$criteria->condition = "M05_id = :id";
		$criteria->params = array(':id'=>$tar->id);
		$cuenta = count($criteria);
		$cuenta =  T01TesisHasUsuario::model()->count($criteria);
		//pagination
		$pages = new CPagination($cuenta);
		$pages->setPageSize(5);
		$pages->applyLimit($criteria);
		$modell = T01TesisHasUsuario::model()->findAll($criteria);
		//$model = new CArrayDataProvider($modell);		
		

		$this->render('list_t',array(
			'Usuario'=>$tar,			 
			 'model'=>$modell,
			 'pages'=>$pages,

			));
	}
	public function actionPasantias(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=T02PasantiaHasUsuario::model()->findAll('M05_id = '.$tar->id);

		$criteria = new CDbCriteria();
		$criteria->select = array("*");
		$criteria->condition = "M05_id = :id";
		$criteria->params = array(':id'=>$tar->id);
		$cuenta = count($criteria);
		$cuenta =  T02PasantiaHasUsuario::model()->count($criteria);
		//pagination
		$pages = new CPagination($cuenta);
		$pages->setPageSize(5);
		$pages->applyLimit($criteria);
		$modell = T02PasantiaHasUsuario::model()->findAll($criteria);
		//$model = new CArrayDataProvider($modell);		
		

		$this->render('list_p',array(
			'Usuario'=>$tar,			 
			 'model'=>$modell,
			 'pages'=>$pages,
			 
			));
	}
	public function actionTesdeta($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M03Tesis::model()->findByPk($id);
		$has1=T01TesisHasUsuario::model()->findAll('M03_id = '.$tesis->id);
		$this->render('test',array(
			'Usuario'=>$tar,
			'model'=>$tesis,
			'has1'=>$has1,
			));
	}

	public function actionPasdeta($id){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$Pasantia=M04Pasantia::model()->findByPk($id);
		$has1=T02PasantiaHasUsuario::model()->findAll('M04_id = '.$Pasantia->id);
		$this->render('tesp',array(
			'Usuario'=>$tar,
			'model'=>$Pasantia,
			'has1'=>$has1,
			));
	}
	
}
?>