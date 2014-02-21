<?php

/**
 * This is the model class for table "m02_cronograma".
 *
 * The followings are the available columns in table 'm02_cronograma':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $m04_pasantia_id
 *
 * The followings are the available model relations:
 * @property M04Pasantia $m04Pasantia
 * @property T11Actividad[] $t11Actividads
 */
class M02Cronograma extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return M02Cronograma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm02_cronograma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, m04_pasantia_id', 'required'),
			array('m04_pasantia_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, m04_pasantia_id', 'safe', 'on'=>'search'),
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
			'm04Pasantia' => array(self::BELONGS_TO, 'M04Pasantia', 'm04_pasantia_id'),
			't11Actividads' => array(self::HAS_MANY, 'T11Actividad', 'M02_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'm04_pasantia_id' => 'M04 Pasantia',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('m04_pasantia_id',$this->m04_pasantia_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}