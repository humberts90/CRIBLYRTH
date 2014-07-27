<?php

/**
 * This is the model class for table "m04_pasantia".
 *
 * The followings are the available columns in table 'm04_pasantia':
 * @property integer $id
 * @property string $Titulo
 * @property string $Planteamiento_Problema
 * @property string $Descripcion_Trabajo
 * @property string $Objetivo_General
 * @property string $Objetivo_Especifico
 * @property string $Antecedentes
 * @property string $Metodologia
 * @property string $Productos_Desarrollo
 * @property string $Fecha_Inscripcion
 * @property string $Fecha_Defensa
 * @property string $Fecha_Aprobacion
 * @property integer $M06_id
 * @property integer $P03_id
 * @property string $Lapso_Academico_defensa
 * @property string $fecha_val
 * @property integer $vacantes
 * @property double $pago
 *
 * The followings are the available model relations:
 * @property M02Cronograma[] $m02Cronogramas
 * @property P03Status $p03
 * @property M06Empresa $m06
 * @property T02PasantiaHasUsuario[] $t02PasantiaHasUsuarios
 * @property T05ConocimientoPasantias[] $t05ConocimientoPasantiases
 * @property T10ObservacionPasantias[] $t10ObservacionPasantiases
 */
class M04Pasantia extends CActiveRecord
{
    public $cono;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm04_pasantia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P03_id', 'required'),
			array('M06_id, P03_id, vacantes', 'numerical', 'integerOnly'=>true),
			array('pago', 'numerical'),
			array('Titulo', 'length', 'max'=>255),
			array('Lapso_Academico_defensa', 'length', 'max'=>6),
			array('Planteamiento_Problema, Descripcion_Trabajo, Objetivo_General, Objetivo_Especifico, Antecedentes, Metodologia, Productos_Desarrollo, Fecha_Inscripcion, Fecha_Defensa, Fecha_Aprobacion, fecha_val', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Titulo, Planteamiento_Problema, Descripcion_Trabajo, Objetivo_General, Objetivo_Especifico, Antecedentes, Metodologia, Productos_Desarrollo, Fecha_Inscripcion, Fecha_Defensa, Fecha_Aprobacion, M06_id, P03_id, Lapso_Academico_defensa, fecha_val, vacantes, pago', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'm02Cronogramas' => array(self::HAS_MANY, 'M02Cronograma', 'm04_pasantia_id'),
			'p03' => array(self::BELONGS_TO, 'P03Status', 'P03_id'),
			'm06' => array(self::BELONGS_TO, 'M06Empresa', 'M06_id'),
			't02PasantiaHasUsuarios' => array(self::HAS_MANY, 'T02PasantiaHasUsuario', 'M04_id'),
			't05ConocimientoPasantiases' => array(self::HAS_MANY, 'T05ConocimientoPasantias', 'M04_id'),
			't10ObservacionPasantiases' => array(self::HAS_MANY, 'T10ObservacionPasantias', 'M04_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Titulo' => 'Titulo',
			'Planteamiento_Problema' => 'Planteamiento Problema',
			'Descripcion_Trabajo' => 'Descripcion Trabajo',
			'Objetivo_General' => 'Objetivo General',
			'Objetivo_Especifico' => 'Objetivo Especifico',
			'Antecedentes' => 'Antecedentes',
			'Metodologia' => 'Metodologia',
			'Productos_Desarrollo' => 'Productos Desarrollo',
			'Fecha_Inscripcion' => 'Fecha Inscripcion',
			'Fecha_Defensa' => 'Fecha Defensa',
			'Fecha_Aprobacion' => 'Fecha Aprobacion',
			'M06_id' => 'M06',
			'P03_id' => 'P03',
			'Lapso_Academico_defensa' => 'Lapso Academico Defensa',
			'fecha_val' => 'Fecha Val',
			'vacantes' => 'Vacantes',
			'pago' => 'Pago',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Titulo',$this->Titulo,true);
		$criteria->compare('Planteamiento_Problema',$this->Planteamiento_Problema,true);
		$criteria->compare('Descripcion_Trabajo',$this->Descripcion_Trabajo,true);
		$criteria->compare('Objetivo_General',$this->Objetivo_General,true);
		$criteria->compare('Objetivo_Especifico',$this->Objetivo_Especifico,true);
		$criteria->compare('Antecedentes',$this->Antecedentes,true);
		$criteria->compare('Metodologia',$this->Metodologia,true);
		$criteria->compare('Productos_Desarrollo',$this->Productos_Desarrollo,true);
		$criteria->compare('Fecha_Inscripcion',$this->Fecha_Inscripcion,true);
		$criteria->compare('Fecha_Defensa',$this->Fecha_Defensa,true);
		$criteria->compare('Fecha_Aprobacion',$this->Fecha_Aprobacion,true);
		$criteria->compare('M06_id',$this->M06_id);
		$criteria->compare('P03_id',$this->P03_id);
		$criteria->compare('Lapso_Academico_defensa',$this->Lapso_Academico_defensa,true);
		$criteria->compare('fecha_val',$this->fecha_val,true);
		$criteria->compare('vacantes',$this->vacantes);
		$criteria->compare('pago',$this->pago);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return M04Pasantia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
