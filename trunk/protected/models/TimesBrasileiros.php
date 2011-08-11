<?php

/**
 * This is the model class for table "times_brasileiros".
 *
 * The followings are the available columns in table 'times_brasileiros':
 * @property integer $tim_bra_id
 * @property string $tim_bra_nome
 * @property string $tim_bra_sigla
 *
 * The followings are the available model relations:
 * @property Jogadores[] $jogadores
 */
class TimesBrasileiros extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TimesBrasileiros the static model class
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
		return 'times_brasileiros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tim_bra_nome', 'length', 'max'=>100),
			array('tim_bra_sigla', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tim_bra_id, tim_bra_nome, tim_bra_sigla', 'safe', 'on'=>'search'),
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
			'jogadores' => array(self::HAS_MANY, 'Jogadores', 'tim_bra_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tim_bra_id' => 'Id Time',
			'tim_bra_nome' => 'Time',
			'tim_bra_sigla' => 'Sigla',
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

		$criteria->compare('tim_bra_id',$this->tim_bra_id);
		$criteria->compare('tim_bra_nome',$this->tim_bra_nome,true);
		$criteria->compare('tim_bra_sigla',$this->tim_bra_sigla,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}