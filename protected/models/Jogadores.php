<?php

/**
 * This is the model class for table "jogadores".
 *
 * The followings are the available columns in table 'jogadores':
 * @property integer $jog_id
 * @property string $jog_nome_colete
 * @property integer $tim_bra_id
 * @property boolean $jog_linha
 * @property boolean $jog_gol
 * @property integer $tip_jog_id
 * @property integer $pos_id
 *
 * The followings are the available model relations:
 * @property JogadorTime[] $jogadorTimes
 * @property Pessoas $jog
 * @property TipoJogador $tipJog
 * @property Posicoes $pos
 * @property TimesBrasileiros $timBra
 */
class Jogadores extends CActiveRecord
{
    private $jog_linha_descricao;
    private $jog_gol_descricao;
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
			array('jog_id', 'unique'),
			array('jog_id, tim_bra_id, tip_jog_id, pos_id', 'numerical', 'integerOnly'=>true),
			array('jog_nome_colete', 'length', 'max'=>30),
			array('jog_linha, jog_gol', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jog_id, jog_nome_colete, tim_bra_id, jog_linha, jog_gol, tip_jog_id, pos_id', 'safe', 'on'=>'search'),
		);
	}


        public function  afterFind() {
            parent::afterFind();
            $this->jog_linha_descricao = $this->jog_linha==true ? 'Sim' : 'Não';
            $this->jog_gol_descricao = $this->jog_gol==true ? 'Sim' : 'Não';
        }


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'jogadorTimes' => array(self::HAS_MANY, 'JogadorTime', 'jog_id'),
			'jog' => array(self::BELONGS_TO, 'Pessoas', 'jog_id'),
			'tipJog' => array(self::BELONGS_TO, 'TipoJogador', 'tip_jog_id'),
			'pos' => array(self::BELONGS_TO, 'Posicoes', 'pos_id'),
			'timBra' => array(self::BELONGS_TO, 'TimesBrasileiros', 'tim_bra_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jog_id' => 'Id',
			'jog_nome_colete' => 'Nome no Colete',
			'tim_bra_id' => 'Time',
			'jog_linha' => 'É Linha',
			'jog_gol' => 'É Goleiro',
			'tip_jog_id' => 'Tipo Jogador',
			'pos_id' => 'Posição',
			'jog_linha_descricao' => 'É Linha',
			'jog_gol_descricao' => 'É Goleiro',
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
		$criteria->compare('jog_nome_colete',$this->jog_nome_colete,true);
		$criteria->compare('tim_bra_id',$this->tim_bra_id);
		$criteria->compare('jog_linha',$this->jog_linha);
		$criteria->compare('jog_gol',$this->jog_gol);
		$criteria->compare('tip_jog_id',$this->tip_jog_id);
		$criteria->compare('pos_id',$this->pos_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function getJog_linha_descricao() {
            return $this->jog_linha_descricao;
        }

        public function setJog_linha_descricao($jog_linha_descricao) {
            $this->jog_linha_descricao = $jog_linha_descricao;
        }

        public function getJog_gol_descricao() {
            return $this->jog_gol_descricao;
        }

        public function setJog_gol_descricao($jog_gol_descricao) {
            $this->jog_gol_descricao = $jog_gol_descricao;
        }



}