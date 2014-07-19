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

		//-----------------Busqueda de tesis del profesor-------------------------------

			$search_values=M03Tesis::model()->findAll("P03_id = 3");

			$consulta="select A.Titulo as Titulo,A.id as ID,A.P03_id AS P03, A.Fecha_Aprobación as FA, A.Fecha_Inscripcion as FI, A.Fecha_Defensa as FD,B.P02_id AS P02 from m03_tesis as A, t01_tesis_has_usuario as B WHERE A.id=B.M03_id AND B.P02_id=2 AND A.Fecha_Defensa > DATE_FORMAT(NOW(),'%Y-%m-%d') AND B.M05_id=".$tar->id." ORDER BY A.Fecha_Defensa DESC";
			$rawData = Yii::app()->db->createCommand($consulta); //or use ->queryAll(); in CArrayDataProvider
			$count = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $consulta . ') as count_alias')->queryScalar();

			 $dataProvider = new CSqlDataProvider($rawData, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'ID',   
                    'totalItemCount'=>$count,       
 
 
                    'sort' => array(
                        'attributes' => array(
                            'ID','Titulo', 'P03','FA','FD','FI','P02',
                        ),
                        'defaultOrder' => array(
                            'ID' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 3,
                    ),
                ));
 
       
			
			

		//-----------------------------------------------------------------------------
		//----------------------Para las Pasantias-------------------------------------
		$consulta2="select A.Titulo as Titulo,A.id as ID,A.P03_id AS P03, A.Fecha_Aprobacion as FA,M07_id as M07, A.Fecha_Inscripcion as FI, A.Fecha_Defensa as FD,B.P02_id AS P02 from m04_pasantia as A, t02_pasantia_has_usuario as B WHERE A.id=B.M04_id AND B.P02_id=2 AND A.Fecha_Defensa  > DATE_FORMAT(NOW(),'%Y-%m-%d') AND B.M05_id=".$tar->id." ORDER BY A.Fecha_Defensa DESC";
		$rawData2 = Yii::app()->db->createCommand($consulta2); //or use ->queryAll(); in CArrayDataProvider
			$count2 = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $consulta2 . ') as count_alias')->queryScalar();

			 $dataProvider2 = new CSqlDataProvider($rawData2, array( //or $model=new CArrayDataProvider($rawData, array(... //using with querAll...
                    'keyField' => 'ID',          
 					'totalItemCount'=>$count2,
 
                    'sort' => array(
                        'attributes' => array(
                            'ID','Titulo', 'P03','FA','FD','FI','P02','M07',
                        ),
                        'defaultOrder' => array(
                            'ID' => CSort::SORT_ASC, //default sort value
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => 3,
                    ),
                ));
 
			 print_r($dataProvider);
			 die();
		$this->render('index',array('Usuario'=>$tar,'dataProvider'=>$dataProvider,'dataProvider2'=>$dataProvider2));
	}
	public function actionCono(){
	  $tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new T06ConocimientoProfesor;
		if(isset($_POST['T06ConocimientoProfesor']))
		{
			$model->attributes=$_POST['T06ConocimientoProfesor'];
			$cons=M01Profesor::model()->find("Cedula=".$tar->Cedula);
			$model->M01_d=$cons->id;
			if($model->save()){
			
			}
				
		}
		
		$this->render('cprof',array('Usuario'=>$tar,'model'=>$model,));
	}
	
	public function actionOferta_t()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M03Tesis;

		if(isset($_POST["M03Tesis"]))
		{
			$model->attributes=$_POST["M03Tesis"];

			$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");
			$model->fecha_val = $_POST["M03Tesis"]["fecha_val"];
			$model->vacantes = $_POST["M03Tesis"]["vacantes"];
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
			$model->fecha_val = $_POST["M04Pasantia"]["fecha_val"];
			$model->vacantes = $_POST["M04Pasantia"]["vacantes"];
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