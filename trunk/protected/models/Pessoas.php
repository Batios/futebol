<?php

/**
 * This is the model class for table "pessoas".
 *
 * The followings are the available columns in table 'pessoas':
 * @property integer $pes_id
 * @property string $pes_nome
 * @property string $pes_apelido
 * @property string $pes_data_nascimento
 * @property string $pes_data_cadastro
 *
 * The followings are the available model relations:
 * @property Jogadores $jogadores
 */
class Pessoas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Pessoas the static model class
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
		return 'pessoas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pes_nome', 'length', 'max'=>100),
			array('pes_apelido', 'length', 'max'=>20),
			array('pes_data_nascimento, pes_data_cadastro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pes_id, pes_nome, pes_apelido, pes_data_nascimento, pes_data_cadastro', 'safe', 'on'=>'search'),
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
			'jogadores' => array(self::HAS_ONE, 'Jogadores', 'jog_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pes_id' => 'Pes',
			'pes_nome' => 'Pes Nome',
			'pes_apelido' => 'Pes Apelido',
			'pes_data_nascimento' => 'Pes Data Nascimento',
			'pes_data_cadastro' => 'Pes Data Cadastro',
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

		$criteria->compare('pes_id',$this->pes_id);
		$criteria->compare('pes_nome',$this->pes_nome,true);
		$criteria->compare('pes_apelido',$this->pes_apelido,true);
		$criteria->compare('pes_data_nascimento',$this->pes_data_nascimento,true);
		$criteria->compare('pes_data_cadastro',$this->pes_data_cadastro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}