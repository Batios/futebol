<?php

/**
 * This is the model class for table "partidas".
 *
 * The followings are the available columns in table 'partidas':
 * @property integer $par_id
 * @property string $par_data_partida
 * @property string $par_data_cadastro
 */
class Partidas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Partidas the static model class
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
		return 'partidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('par_data_partida, par_data_cadastro', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('par_id, par_data_partida, par_data_cadastro', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'par_id' => 'Par',
			'par_data_partida' => 'Par Data Partida',
			'par_data_cadastro' => 'Par Data Cadastro',
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

		$criteria->compare('par_id',$this->par_id);
		$criteria->compare('par_data_partida',$this->par_data_partida,true);
		$criteria->compare('par_data_cadastro',$this->par_data_cadastro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}