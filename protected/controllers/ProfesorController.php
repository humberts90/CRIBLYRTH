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

	public static function testProfesor(){
		 	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	

			$search_values=M03Tesis::model()->findAll("P03_id = 3");

			$consulta="SELECT A.Titulo as Titulo,A.id as ID,A.P03_id AS P03, A.Fecha_Aprobación as FA, A.Fecha_Inscripcion as FI, A.Fecha_Defensa as FD,B.P02_id AS P02 from m03_tesis as A, t01_tesis_has_usuario as B WHERE A.id=B.M03_id AND B.P02_id=2 AND A.Fecha_Defensa > DATE_FORMAT(NOW(),'%Y-%m-%d') AND B.M05_id=".$tar->id." ORDER BY A.Fecha_Defensa DESC";
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
			 return $dataProvider;

		}

		public static function pasantias(){
		 	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
				$consulta2="SELECT A.Titulo as Titulo,A.id as ID,A.P03_id AS P03, A.Fecha_Aprobacion as FA,M07_id as M07, A.Fecha_Inscripcion as FI, A.Fecha_Defensa as FD,B.P02_id AS P02 from m04_pasantia as A, t02_pasantia_has_usuario as B WHERE A.id=B.M04_id AND B.P02_id=3 AND A.Fecha_Defensa  > DATE_FORMAT(NOW(),'%Y-%m-%d') AND B.M05_id=".$tar->id." ORDER BY A.Fecha_Defensa DESC";
		$rawData2 = Yii::app()->db->createCommand($consulta2); //or use ->queryAll(); in CArrayDataProvider
			$count2 = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $consulta2 . ') as count_alias')->queryScalar();
			$criteria=new CDbCriteria;
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
			 return $dataProvider2;
		}


	public function actionIndex(){
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	


		$this->render('index',array('Usuario'=>$tar,'dataProvider'=>ProfesorController::testProfesor(),'dataProvider2'=>ProfesorController::pasantias()));
	}




	public function actionOferta_t()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");	
		$model=new M03Tesis;
		$model_5=new T04ConocimientoTesis;
		if(isset($_POST["M03Tesis"]))
		{
			$model->attributes=$_POST["M03Tesis"];

			$modelStatus = P03Status::model()->find("Descripcion = 'Oferta'");

				$model->P03_id = $modelStatus->id;

			if($model->save())
			{    

				$modelRelacion = P02TipoRelacion::model()->find("Descripcion = 'Tutor'");

				$modelAsoc = new T01TesisHasUsuario;
				$modelAsoc->M05_id = $tar->id;
				$modelAsoc->M03_id = $model->id;
				$modelAsoc->P02_id = $modelRelacion->id;

				$modelAsoc->save();
				$model_5->M03_id= $model->id;
				$model_5->save();
				$this->render('index',array('Usuario'=>$tar,'dataProvider'=>ProfesorController::testProfesor(),'dataProvider2'=>ProfesorController::pasantias()));
			}

		}

		$this->render('oferta',array(
			'Usuario'=>$tar,
			'model'=>$model,
			'model_5'=>$model_5,
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
				$this->render('index',array('Usuario'=>$tar,'dataProvider'=>ProfesorController::testProfesor(),'dataProvider2'=>ProfesorController::pasantias()));
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
	public function actionareas($id){
	
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$tesis=M03Tesis::model()->findByPk($id);
	    $model_1=new T04ConocimientoTesis;
		
		if( isset ($_POST['T04ConocimientoTesis'])){
		  $model_1->attributes=$_POST['T04ConocimientoTesis'];
		  $model_1->M03_id =$id;
		  $model_1->save();
		 
		  $this->redirect(array('tesdeta','id'=>$id));
		}
		$this->render('areaconocimiento',array(
			'Usuario'=>$tar,
			'model_1'=>$model_1,
			'model'=>$tesis,

			));
	}
	public function actionSelect2(){


		$id_uno =$_POST['T04ConocimientoTesis']['p09_id'];

		$lista=P10EjeCurricular::model()->findAll('p09_id = :id_uno',array(':id_uno'=>$id_uno));

		$lista= CHtml::listData($lista,'id','Nombre');

		foreach($lista as $valor=>$nombre){

			echo Chtml::tag('option',array('value'=>$valor),CHtml::encode($nombre),true);

		}
	}
	public function actionSelectdos2(){


		$id_uno =$_POST['T04ConocimientoTesis']['P10_id'];

		$lista=P11Conocimientos::model()->findAll('P10_id = :id_uno',array(':id_uno'=>$id_uno));

		$lista= CHtml::listData($lista,'id','Nombre');

		foreach($lista as $valor=>$nombre){

			echo Chtml::tag('option',array('value'=>$valor),CHtml::encode($nombre),true);

		}
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
	public function actionareasp($id){
	
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$Pasantia=M04Pasantia::model()->findByPk($id);
	    $model_1=new T05ConocimientoPasantias;
		
		if( isset ($_POST['T05ConocimientoPasantias'])){
		  $model_1->attributes=$_POST['T05ConocimientoPasantias'];
		  $model_1->M04_id=$id;
		  $model_1->save();
		 
		  $this->redirect(array('pasdeta','id'=>$id));
		}
		$this->render('areaconocimientopas',array(
			'Usuario'=>$tar,
			'model_1'=>$model_1,
			'model'=>$Pasantia,

			));
	}
	public function actionSelect3(){


		$id_uno =$_POST['T05ConocimientoPasantias']['p09_id'];

		$lista=P10EjeCurricular::model()->findAll('p09_id = :id_uno',array(':id_uno'=>$id_uno));

		$lista= CHtml::listData($lista,'id','Nombre');

		foreach($lista as $valor=>$nombre){

			echo Chtml::tag('option',array('value'=>$valor),CHtml::encode($nombre),true);

		}
	}
	public function actionSelectdos3(){


		$id_uno =$_POST['T05ConocimientoPasantias']['P10_id'];

		$lista=P11Conocimientos::model()->findAll('P10_id = :id_uno',array(':id_uno'=>$id_uno));

		$lista= CHtml::listData($lista,'id','Nombre');

		foreach($lista as $valor=>$nombre){

			echo Chtml::tag('option',array('value'=>$valor),CHtml::encode($nombre),true);

		}
	}
	
	
	public function actionperfil(){
	$model=new M01Profesor;
	$model_1=new T06ConocimientoProfesor;
	$model_2=new P11Conocimientos;
	$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
	$profesor=M01Profesor::model()->find('Cedula='.$tar->Cedula);
	$conoci=T06ConocimientoProfesor::model()->findAll('M01_d='.$profesor->id);
	
	
	$this->render('perfilprofesor',array(
			'Usuario'=>$tar,
			'model'=>$model,
			 'model_1'=>$model_1,
			 'model_2'=>$model_2,
			 'conoci'=>$conoci,
			));
	
	}
	
	public function actionCono()
	{
		$tar=M05Usuario::model()->find("Usuario = '".Yii::app ()->user->name."'");
		$model=new T06ConocimientoProfesor;
		
		$this->render('cono',array('Usuario'=>$tar,'model'=>$model));
		if( isset ($_POST['T06ConocimientoProfesor'])){
		  $model->attributes=$_POST['T06ConocimientoProfesor'];
		  $prof=M01Profesor::model()->find('Cedula='.$tar->Cedula);
		  $model->M01_d=$prof->id;
		  $model->save();
		}
		
	}
	public function actionSelect(){


		$id_uno =$_POST['T06ConocimientoProfesor']['p09_id'];

		$lista=P10EjeCurricular::model()->findAll('p09_id = :id_uno',array(':id_uno'=>$id_uno));

		$lista= CHtml::listData($lista,'id','Nombre');

		foreach($lista as $valor=>$nombre){

			echo Chtml::tag('option',array('value'=>$valor),CHtml::encode($nombre),true);

		}
	}
	public function actionSelectdos(){


		$id_uno =$_POST['T06ConocimientoProfesor']['P10_id'];

		$lista=P11Conocimientos::model()->findAll('P10_id = :id_uno',array(':id_uno'=>$id_uno));

		$lista= CHtml::listData($lista,'id','Nombre');

		foreach($lista as $valor=>$nombre){

			echo Chtml::tag('option',array('value'=>$valor),CHtml::encode($nombre),true);

		}
	}

}
?>