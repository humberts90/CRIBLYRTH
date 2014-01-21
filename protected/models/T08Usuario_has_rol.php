<?php

/**
 * This is the model class for table "t08_usuario_has_rol".
 *
 * The followings are the available columns in table 't08_usuario_has_rol':
 * @property integer $M05_id
 * @property integer $P01_id
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property M05Usuario $m05
 * @property P01Rol $p01
 */
class T08Usuario_has_rol extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return T08Usuario_has_rol the static model class
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
		return 't08_usuario_has_rol';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('M05_id, P01_id', 'required'),
			array('M05_id, P01_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('M05_id, P01_id, id', 'safe', 'on'=>'search'),
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
			'm05' => array(self::BELONGS_TO, 'M05Usuario', 'M05_id'),
			'p01' => array(self::BELONGS_TO, 'P01Rol', 'P01_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'M05_id' => 'M05',
			'P01_id' => 'P01',
			'id' => 'ID',
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

		$criteria->compare('M05_id',$this->M05_id);
		$criteria->compare('P01_id',$this->P01_id);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}