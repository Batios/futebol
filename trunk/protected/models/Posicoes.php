<?php

/**
 * This is the model class for table "posicoes".
 *
 * The followings are the available columns in table 'posicoes':
 * @property integer $pos_id
 * @property string $pos_descricao
 *
 * The followings are the available model relations:
 * @property Jogadores[] $jogadores
 */
class Posicoes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Posicoes the static model class
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
		return 'posicoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pos_descricao', 'required'),
			array('pos_descricao', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pos_id, pos_descricao', 'safe', 'on'=>'search'),
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
			'jogadores' => array(self::HAS_MANY, 'Jogadores', 'pos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pos_id' => 'Id Posição',
			'pos_descricao' => 'Posição Descrição',
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

		$criteria->compare('pos_id',$this->pos_id);
		$criteria->compare('pos_descricao',$this->pos_descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}