<?php

/**
 * This is the model class for table "tipo_jogador".
 *
 * The followings are the available columns in table 'tipo_jogador':
 * @property integer $tip_jog_id
 * @property string $tip_jog_descricao
 *
 * The followings are the available model relations:
 * @property Jogadores[] $jogadores
 */
class TipoJogador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoJogador the static model class
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
		return 'tipo_jogador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tip_jog_descricao', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tip_jog_id, tip_jog_descricao', 'safe', 'on'=>'search'),
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
			'jogadores' => array(self::HAS_MANY, 'Jogadores', 'tip_jog_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tip_jog_id' => 'Tip Jog',
			'tip_jog_descricao' => 'Tip Jog Descricao',
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

		$criteria->compare('tip_jog_id',$this->tip_jog_id);
		$criteria->compare('tip_jog_descricao',$this->tip_jog_descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}