<?php

/**
 * This is the model class for table "jogador_time".
 *
 * The followings are the available columns in table 'jogador_time':
 * @property integer $jog_tim_id
 * @property integer $jog_id
 * @property integer $tim_id
 *
 * The followings are the available model relations:
 * @property Gols[] $gols
 * @property Jogadores $jog
 * @property Times $tim
 */
class JogadorTime extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return JogadorTime the static model class
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
		return 'jogador_time';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jog_id, tim_id', 'required'),
			array('jog_id, tim_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jog_tim_id, jog_id, tim_id', 'safe', 'on'=>'search'),
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
			'gols' => array(self::HAS_MANY, 'Gols', 'jog_tim_id'),
			'jog' => array(self::BELONGS_TO, 'Jogadores', 'jog_id'),
			'tim' => array(self::BELONGS_TO, 'Times', 'tim_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jog_tim_id' => 'Jog Tim',
			'jog_id' => 'Jog',
			'tim_id' => 'Tim',
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

		$criteria->compare('jog_tim_id',$this->jog_tim_id);
		$criteria->compare('jog_id',$this->jog_id);
		$criteria->compare('tim_id',$this->tim_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}