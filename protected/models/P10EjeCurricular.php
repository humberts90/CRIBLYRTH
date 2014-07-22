<?php

/**
 * This is the model class for table "p10_eje_curricular".
 *
 * The followings are the available columns in table 'p10_eje_curricular':
 * @property integer $P09_id
 * @property integer $id
 * @property string $Nombre
 *
 * The followings are the available model relations:
 * @property P09Departamento $p09
 * @property P11Conocimientos[] $p11Conocimientoses
 */
class P10EjeCurricular extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'p10_eje_curricular';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('P09_id, Nombre', 'required'),
			array('P09_id', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('P09_id, id, Nombre', 'safe', 'on'=>'search'),
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
			'p09' => array(self::BELONGS_TO, 'P09Departamento', 'P09_id'),
			'p11Conocimientoses' => array(self::HAS_MANY, 'P11Conocimientos', 'P10_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'P09_id' => 'P09',
			'id' => 'ID',
			'Nombre' => 'Nombre',
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

		$criteria->compare('P09_id',$this->P09_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('Nombre',$this->Nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return P10EjeCurricular the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
