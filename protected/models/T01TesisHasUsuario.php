<?php

/**
 * This is the model class for table "t01_tesis_has_usuario".
 *
 * The followings are the available columns in table 't01_tesis_has_usuario':
 * @property integer $M03_id
 * @property integer $M05_id
 * @property integer $P03_id
 * @property integer $P02_id
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property P02TipoRelacion $p02
 * @property P03Status $p03
 * @property M03Tesis $m03
 * @property M05Usuario $m05
 */
class T01TesisHasUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't01_tesis_has_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('M03_id, M05_id, P03_id, P02_id', 'required'),
			array('M03_id, M05_id, P03_id, P02_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('M03_id, M05_id, P03_id, P02_id, id', 'safe', 'on'=>'search'),
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
			'p02' => array(self::BELONGS_TO, 'P02TipoRelacion', 'P02_id'),
			'p03' => array(self::BELONGS_TO, 'P03Status', 'P03_id'),
			'm03' => array(self::BELONGS_TO, 'M03Tesis', 'M03_id'),
			'm05' => array(self::BELONGS_TO, 'M05Usuario', 'M05_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'M03_id' => 'M03',
			'M05_id' => 'M05',
			'P03_id' => 'P03',
			'P02_id' => 'P02',
			'id' => 'ID',
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

		$criteria->compare('M03_id',$this->M03_id);
		$criteria->compare('M05_id',$this->M05_id);
		$criteria->compare('P03_id',$this->P03_id);
		$criteria->compare('P02_id',$this->P02_id);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return T01TesisHasUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
