<?php

/**
 * This is the model class for table "jogadores".
 *
 * The followings are the available columns in table 'jogadores':
 * @property integer $jog_id
 * @property integer $jog_tipo
 * @property string $jog_nome_colete
 * @property integer $tim_bra_id
 *
 * The followings are the available model relations:
 * @property Pessoas $jog
 * @property JogadorTime[] $jogadorTimes
 */
class Jogadores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Jogadores the static model class
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
		return 'jogadores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jog_id', 'required'),
			array('jog_id, jog_tipo, tim_bra_id', 'numerical', 'integerOnly'=>true),
			array('jog_nome_colete', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jog_id, jog_tipo, jog_nome_colete, tim_bra_id', 'safe', 'on'=>'search'),
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
			'jog' => array(self::BELONGS_TO, 'Pessoas', 'jog_id'),
			'jogadorTimes' => array(self::HAS_MANY, 'JogadorTime', 'jog_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jog_id' => 'Jog',
			'jog_tipo' => 'Jog Tipo',
			'jog_nome_colete' => 'Jog Nome Colete',
			'tim_bra_id' => 'Tim Bra',
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

		$criteria->compare('jog_id',$this->jog_id);
		$criteria->compare('jog_tipo',$this->jog_tipo);
		$criteria->compare('jog_nome_colete',$this->jog_nome_colete,true);
		$criteria->compare('tim_bra_id',$this->tim_bra_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}