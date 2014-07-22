<?php

/**
 * This is the model class for table "p11_conocimientos".
 *
 * The followings are the available columns in table 'p11_conocimientos':
 * @property integer $id
 * @property string $Nombre
 * @property string $Descripcion
 * @property integer $P10_id
 *
 * The followings are the available model relations:
 * @property P10EjeCurricular $p10
 * @property T04ConocimientoTesis[] $t04ConocimientoTesises
 * @property T05ConocimientoPasantias[] $t05ConocimientoPasantiases
 * @property T06ConocimientoProfesor[] $t06ConocimientoProfesors
 */
class P11Conocimientos extends CActiveRecord
{
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
			// @todo Please remove those attributes that should not be searched.
			array('id, Nombre, Descripcion, P10_id', 'safe', 'on'=>'search'),
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
			'p10' => array(self::BELONGS_TO, 'P10EjeCurricular', 'P10_id'),
			't04ConocimientoTesises' => array(self::HAS_MANY, 'T04ConocimientoTesis', 'P11_id'),
			't05ConocimientoPasantiases' => array(self::HAS_MANY, 'T05ConocimientoPasantias', 'P11_id'),
			't06ConocimientoProfesors' => array(self::HAS_MANY, 'T06ConocimientoProfesor', 'P11_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nombre' => 'Nombre',
			'Descripcion' => 'Descripcion',
			'P10_id' => 'P10',
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
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('P10_id',$this->P10_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return P11Conocimientos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
