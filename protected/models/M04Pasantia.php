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
 * @property integer $M06_id
 *
 * The followings are the available model relations:
 * @property M06Empresa $m06
 * @property T02PasantiaHasUsuario[] $t02PasantiaHasUsuarios
 * @property T10Conocimientos[] $t10Conocimientoses
 * @property T11Actividad[] $t11Actividads
 */
class M04Pasantia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $temp;
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
			array('M06_id', 'numerical', 'integerOnly'=>true),
			array('Titulo', 'length', 'max'=>255),
			array('Planteamiento_Problema, Descripcion_Trabajo, Objetivo_General, Objetivo_Especifico, Antecedentes, Metodologia, Productos_Desarrollo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Titulo, Planteamiento_Problema, Descripcion_Trabajo, Objetivo_General, Objetivo_Especifico, Antecedentes, Metodologia, Productos_Desarrollo, M06_id', 'safe', 'on'=>'search'),
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
			'm06' => array(self::BELONGS_TO, 'M06Empresa', 'M06_id'),
			't02PasantiaHasUsuarios' => array(self::HAS_MANY, 'T02PasantiaHasUsuario', 'M04_id'),
			't10Conocimientoses' => array(self::HAS_MANY, 'T10Conocimientos', 'M04_Pasantia_id'),
			't11Actividads' => array(self::HAS_MANY, 'T11Actividad', 'M04_Pasantia_id'),
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
			'M06_id' => 'M06',
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
		$criteria->compare('M06_id',$this->M06_id);

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
