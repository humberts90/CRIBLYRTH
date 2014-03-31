<?php

/**
 * This is the model class for table "p10_areas_conomicmiento".
 *
 * The followings are the available columns in table 'p10_areas_conomicmiento':
 * @property integer $id
 * @property string $Nombre
 * @property integer $P09_id
 * @property string $Descripcion
 *
 * The followings are the available model relations:
 * @property P09Departamento $p09
 * @property P11Conocimientos[] $p11Conocimientoses
 */
class P10AreasConomicmiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return P10AreasConomicmiento the static model class
	 */
	public $Departamento="Departamento";
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'p10_areas_conomicmiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, P09_id', 'required'),
			array('P09_id', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			array('Descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Nombre, P09_id, Descripcion', 'safe', 'on'=>'search'),
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
		public static function getListDepa()
	{
	return CHtml::listData(P09Departamento::model()->findAll(),'id','Nombre');
	}
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nombre' => 'Nombre',
			'P09_id' => 'P09',
			'Descripcion' => 'Descripcion',
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
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('P09_id',$this->P09_id);
		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}