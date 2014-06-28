<?php

/**
 * This is the model class for table "m03_tesis".
 *
 * The followings are the available columns in table 'm03_tesis':
 * @property integer $id
 * @property string $Titulo
 * @property string $Carta_Tutor
 * @property string $Introduccion
 * @property string $Planteamiento_Problema
 * @property string $Objetivo_General
 * @property string $Objetivo_especifico
 * @property string $Justificacion_Importancia
 * @property string $Alcance_Delimitaciones
 * @property string $Antecedentes
 * @property string $Bases_Teoricas
 * @property string $Bases_Legales
 * @property string $Definicion_Terminos
 * @property string $Enfoque_Investigacion
 * @property string $Tipo_Nivel_Invesstigacion
 * @property string $Diseno_Investigacion
 * @property string $Poblacion_Muestra
 * @property string $Tecnicas_Recoleccion_Datos
 * @property string $Metodologias
 * @property string $Referencias
 * @property string $Fecha_Inscripcion
 * @property string $Fecha_Aprobación
 * @property string $Fecha_Defensa
 * @property integer $P03_id
 * @property integer $M06_id
 *
 * The followings are the available model relations:
 * @property P03Status $p03
 * @property M06Empresa $m06
 * @property T01TesisHasUsuario[] $t01TesisHasUsuarios
 * @property T04ConocimientoTesis[] $t04ConocimientoTesises
 * @property T07ObservacionTesis[] $t07ObservacionTesises
 */
class M03Tesis extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return M03Tesis the static model class
	 */
	public $tutor;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm03_tesis';
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
			array('P03_id, M06_id', 'numerical', 'integerOnly'=>true),
			array('Titulo', 'length', 'max'=>45),
			array('Carta_Tutor', 'length', 'max'=>255),
			array('Introduccion, Planteamiento_Problema, Objetivo_General, Objetivo_especifico, Justificacion_Importancia, Alcance_Delimitaciones, Antecedentes, Bases_Teoricas, Bases_Legales, Definicion_Terminos, Enfoque_Investigacion, Tipo_Nivel_Invesstigacion, Diseno_Investigacion, Poblacion_Muestra, Tecnicas_Recoleccion_Datos, Metodologias, Referencias, Fecha_Inscripcion, Fecha_Aprobación, Fecha_Defensa', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Titulo, Carta_Tutor, Introduccion, Planteamiento_Problema, Objetivo_General, Objetivo_especifico, Justificacion_Importancia, Alcance_Delimitaciones, Antecedentes, Bases_Teoricas, Bases_Legales, Definicion_Terminos, Enfoque_Investigacion, Tipo_Nivel_Invesstigacion, Diseno_Investigacion, Poblacion_Muestra, Tecnicas_Recoleccion_Datos, Metodologias, Referencias, Fecha_Inscripcion, Fecha_Aprobación, Fecha_Defensa, P03_id, M06_id', 'safe', 'on'=>'search'),
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
			'p03' => array(self::BELONGS_TO, 'P03Status', 'P03_id'),
			'm06' => array(self::BELONGS_TO, 'M06Empresa', 'M06_id'),
			't01TesisHasUsuarios' => array(self::HAS_MANY, 'T01TesisHasUsuario', 'M03_id'),
			't04ConocimientoTesises' => array(self::HAS_MANY, 'T04ConocimientoTesis', 'M03_id'),
			't07ObservacionTesises' => array(self::HAS_MANY, 'T07ObservacionTesis', 'M03_id'),
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
			'Carta_Tutor' => 'Carta Tutor',
			'Introduccion' => 'Introduccion',
			'Planteamiento_Problema' => 'Planteamiento Problema',
			'Objetivo_General' => 'Objetivo General',
			'Objetivo_especifico' => 'Objetivo Especifico',
			'Justificacion_Importancia' => 'Justificacion Importancia',
			'Alcance_Delimitaciones' => 'Alcance Delimitaciones',
			'Antecedentes' => 'Antecedentes',
			'Bases_Teoricas' => 'Bases Teoricas',
			'Bases_Legales' => 'Bases Legales',
			'Definicion_Terminos' => 'Definicion Terminos',
			'Enfoque_Investigacion' => 'Enfoque Investigacion',
			'Tipo_Nivel_Invesstigacion' => 'Tipo Nivel Invesstigacion',
			'Diseno_Investigacion' => 'Diseno Investigacion',
			'Poblacion_Muestra' => 'Poblacion Muestra',
			'Tecnicas_Recoleccion_Datos' => 'Tecnicas Recoleccion Datos',
			'Metodologias' => 'Metodologias',
			'Referencias' => 'Referencias',
			'Fecha_Inscripcion' => 'Fecha Inscripcion',
			'Fecha_Aprobación' => 'Fecha Aprobación',
			'Fecha_Defensa' => 'Fecha Defensa',
			'P03_id' => 'P03',
			'M06_id' => 'M06',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Titulo',$this->Titulo,true);
		$criteria->compare('Carta_Tutor',$this->Carta_Tutor,true);
		$criteria->compare('Introduccion',$this->Introduccion,true);
		$criteria->compare('Planteamiento_Problema',$this->Planteamiento_Problema,true);
		$criteria->compare('Objetivo_General',$this->Objetivo_General,true);
		$criteria->compare('Objetivo_especifico',$this->Objetivo_especifico,true);
		$criteria->compare('Justificacion_Importancia',$this->Justificacion_Importancia,true);
		$criteria->compare('Alcance_Delimitaciones',$this->Alcance_Delimitaciones,true);
		$criteria->compare('Antecedentes',$this->Antecedentes,true);
		$criteria->compare('Bases_Teoricas',$this->Bases_Teoricas,true);
		$criteria->compare('Bases_Legales',$this->Bases_Legales,true);
		$criteria->compare('Definicion_Terminos',$this->Definicion_Terminos,true);
		$criteria->compare('Enfoque_Investigacion',$this->Enfoque_Investigacion,true);
		$criteria->compare('Tipo_Nivel_Invesstigacion',$this->Tipo_Nivel_Invesstigacion,true);
		$criteria->compare('Diseno_Investigacion',$this->Diseno_Investigacion,true);
		$criteria->compare('Poblacion_Muestra',$this->Poblacion_Muestra,true);
		$criteria->compare('Tecnicas_Recoleccion_Datos',$this->Tecnicas_Recoleccion_Datos,true);
		$criteria->compare('Metodologias',$this->Metodologias,true);
		$criteria->compare('Referencias',$this->Referencias,true);
		$criteria->compare('Fecha_Inscripcion',$this->Fecha_Inscripcion,true);
		$criteria->compare('Fecha_Aprobación',$this->Fecha_Aprobación,true);
		$criteria->compare('Fecha_Defensa',$this->Fecha_Defensa,true);
		$criteria->compare('P03_id',$this->P03_id);
		$criteria->compare('M06_id',$this->M06_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function search_2()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Titulo',$this->Titulo,true);
		$criteria->compare('Carta_Tutor',$this->Carta_Tutor,true);
		$criteria->compare('Introduccion',$this->Introduccion,true);
		$criteria->compare('Planteamiento_Problema',$this->Planteamiento_Problema,true);
		$criteria->compare('Objetivo_General',$this->Objetivo_General,true);
		$criteria->compare('Objetivo_especifico',$this->Objetivo_especifico,true);
		$criteria->compare('Justificacion_Importancia',$this->Justificacion_Importancia,true);
		$criteria->compare('Alcance_Delimitaciones',$this->Alcance_Delimitaciones,true);
		$criteria->compare('Antecedentes',$this->Antecedentes,true);
		$criteria->compare('Bases_Teoricas',$this->Bases_Teoricas,true);
		$criteria->compare('Bases_Legales',$this->Bases_Legales,true);
		$criteria->compare('Definicion_Terminos',$this->Definicion_Terminos,true);
		$criteria->compare('Enfoque_Investigacion',$this->Enfoque_Investigacion,true);
		$criteria->compare('Tipo_Nivel_Invesstigacion',$this->Tipo_Nivel_Invesstigacion,true);
		$criteria->compare('Diseno_Investigacion',$this->Diseno_Investigacion,true);
		$criteria->compare('Poblacion_Muestra',$this->Poblacion_Muestra,true);
		$criteria->compare('Tecnicas_Recoleccion_Datos',$this->Tecnicas_Recoleccion_Datos,true);
		$criteria->compare('Metodologias',$this->Metodologias,true);
		$criteria->compare('Referencias',$this->Referencias,true);
		$criteria->compare('Fecha_Inscripcion',$this->Fecha_Inscripcion,true);
		$criteria->compare('Fecha_Aprobación',$this->Fecha_Aprobación,true);
		$criteria->compare('Fecha_Defensa',$this->Fecha_Defensa,true);
		$criteria->compare('P03_id',$this->P03_id);
		$criteria->compare('M06_id',$this->M06_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
        	'defaultOrder' => 'Fecha_Defensa DESC', 
        	),
		));

	}

}