<?php

/**
 * This is the model class for table "p11_conocimientos".
 *
 * The followings are the available columns in table 'p11_conocimientos':
 * @property integer $id
 * @property string $Nombre
 * @property integer $P10_id
 * @property string $Descripcion
 *
 * The followings are the available model relations:
 * @property P10AreasConomicmiento $p10
 * @property T04ConocimientoTesis[] $t04ConocimientoTesises
 * @property T05ConocimientoPasantias[] $t05ConocimientoPasantiases
 * @property T06ConocimientoProfesor[] $t06ConocimientoProfesors
 */
class P11Conocimientos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return P11Conocimientos the static model class
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
		return 'p11_conocimientos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, P10_id', 'required'),
			array('P10_id', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			array('Descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Nombre, P10_id, Descripcion', 'safe', 'on'=>'search'),
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
			'p10' => array(self::BELONGS_TO, 'P10AreasConomicmiento', 'P10_id'),
			't04ConocimientoTesises' => array(self::HAS_MANY, 'T04ConocimientoTesis', 'P11_id'),
			't05ConocimientoPasantiases' => array(self::HAS_MANY, 'T05ConocimientoPasantias', 'P11_id'),
			't06ConocimientoProfesors' => array(self::HAS_MANY, 'T06ConocimientoProfesor', 'P11_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public static function getListCono()
	{
	return CHtml::listData(P10AreasConomicmiento::model()->findAll(),'id','Nombre');
	}
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nombre' => 'Nombre',
			'P10_id' => 'P10',
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
		$criteria->compare('P10_id',$this->P10_id);
		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}