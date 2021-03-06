<?php

/**
 * This is the model class for table "times".
 *
 * The followings are the available columns in table 'times':
 * @property integer $tim_id
 * @property string $tim_nome
 * @property integer $col_id
 * @property integer $par_id
 *
 * The followings are the available model relations:
 * @property JogadorTime[] $jogadorTimes
 * @property Partidas $par
 * @property Coletes $col
 */
class Times extends CActiveRecord
{
    private $descricao_time;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Times the static model class
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
		return 'times';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tim_nome, col_id, par_id', 'required'),
			array('col_id, par_id', 'numerical', 'integerOnly'=>true),
			array('tim_nome', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tim_id, tim_nome, col_id, par_id', 'safe', 'on'=>'search'),
		);
	}

        public function  afterFind() {
            parent::afterFind();
            $this->setDescricao_time($this->tim_nome.' ['.$this->par->getDescricao_partida().']');
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'jogadorTimes' => array(self::HAS_MANY, 'JogadorTime', 'tim_id'),
			'par' => array(self::BELONGS_TO, 'Partidas', 'par_id'),
			'col' => array(self::BELONGS_TO, 'Coletes', 'col_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tim_id' => 'Id Time',
			'tim_nome' => 'Nome do time',
			'col_id' => 'Colete',
			'par_id' => 'Partida',
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

		$criteria->compare('tim_id',$this->tim_id);
		$criteria->compare('tim_nome',$this->tim_nome,true);
		$criteria->compare('col_id',$this->col_id);
		$criteria->compare('par_id',$this->par_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function getDescricao_time() {
            return $this->descricao_time;
        }

        public function setDescricao_time($descricao_time) {
            $this->descricao_time = $descricao_time;
        }


}