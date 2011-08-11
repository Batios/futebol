<?php

/**
 * This is the model class for table "gols".
 *
 * The followings are the available columns in table 'gols':
 * @property integer $gol_id
 * @property integer $jog_tim_id
 * @property string $gol_data_ocorrencia
 * @property string $gol_data_cadastro
 *
 * The followings are the available model relations:
 * @property JogadorTime $jogTim
 */
class Gols extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Gols the static model class
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
		return 'gols';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jog_tim_id, gol_data_ocorrencia', 'required'),
			array('jog_tim_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gol_id, jog_tim_id, gol_data_ocorrencia, gol_data_cadastro', 'safe', 'on'=>'search'),
		);
	}


        public function  beforeSave() {
            parent::beforeSave();
            if($this->isNewRecord){
                $this->gol_data_cadastro = new CDbExpression('NOW()');
            }
            return $this;
        }

        public function  afterFind() {
            parent::afterFind();
            $date = new CDateFormatter('pt_br');
            $this->gol_data_ocorrencia =  $date->format('dd/MM/yyyy',$this->gol_data_ocorrencia);
            $this->gol_data_cadastro =  $date->format('dd/MM/yyyy - HH:mm:s',$this->gol_data_cadastro);
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'jogTim' => array(self::BELONGS_TO, 'JogadorTime', 'jog_tim_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'gol_id' => 'Id Gol',
			'jog_tim_id' => 'Jogador do Time',
			'gol_data_ocorrencia' => 'Data Ocorrência',
			'gol_data_cadastro' => 'Data Cadastro',
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

		$criteria->compare('gol_id',$this->gol_id);
		$criteria->compare('jog_tim_id',$this->jog_tim_id);
		$criteria->compare('gol_data_ocorrencia',$this->gol_data_ocorrencia,true);
		$criteria->compare('gol_data_cadastro',$this->gol_data_cadastro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}