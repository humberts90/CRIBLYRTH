<?php

/**
 * This is the model class for table "p05_municipio".
 *
 * The followings are the available columns in table 'p05_municipio':
 * @property integer $id
 * @property integer $P06_id
 * @property string $Descripcion
 *
 * The followings are the available model relations:
 * @property P04Parroquia[] $p04Parroquias
 * @property P06Estado $p06
 */
class P05Municipio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'p05_municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P06_id, Descripcion', 'required'),
			array('P06_id', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, P06_id, Descripcion', 'safe', 'on'=>'search'),
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
			'p04Parroquias' => array(self::HAS_MANY, 'P04Parroquia', 'P05_id'),
			'p06' => array(self::BELONGS_TO, 'P06Estado', 'P06_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'P06_id' => 'P06',
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
		$criteria->compare('P06_id',$this->P06_id);
		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return P05Municipio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
