<?php

/**
 * This is the model class for table "p04_parroquia".
 *
 * The followings are the available columns in table 'p04_parroquia':
 * @property integer $id
 * @property integer $P05_id
 * @property string $Descripcion
 *
 * The followings are the available model relations:
 * @property M06Empresa[] $m06Empresas
 * @property P05Municipio $p05
 */
class P04Parroquia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'p04_parroquia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P05_id, Descripcion', 'required'),
			array('P05_id', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, P05_id, Descripcion', 'safe', 'on'=>'search'),
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
			'm06Empresas' => array(self::HAS_MANY, 'M06Empresa', 'P04_id'),
			'p05' => array(self::BELONGS_TO, 'P05Municipio', 'P05_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'P05_id' => 'P05',
			'Descripcion' => 'Descripcion',
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
		$criteria->compare('P05_id',$this->P05_id);
		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return P04Parroquia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
