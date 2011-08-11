<?php

/**
 * This is the model class for table "partidas".
 *
 * The followings are the available columns in table 'partidas':
 * @property integer $par_id
 * @property string $par_data_partida
 * @property string $par_data_cadastro
 * @property string $par_descricao
 * @property string $par_data_alteracao
 *
 * The followings are the available model relations:
 * @property Times[] $times
 */
class Partidas extends CActiveRecord
{
    private $descricao_partida;
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
			array('par_data_partida, par_descricao', 'required'),
			array('par_descricao', 'length', 'max'=>50),
			array('par_data_cadastro, par_data_alteracao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('par_id, par_data_partida, par_data_cadastro, par_descricao, par_data_alteracao', 'safe', 'on'=>'search'),
		);
	}

        public function partidasAtuais(){

            $this->getDbCriteria()->mergeWith(array(
                'condition'=>"par_data_partida >= NOW()"
                ));

            return $this;
        }

        public function beforeSave(){
            parent::beforeSave();

            if($this->isNewRecord){
                $this->par_data_cadastro = new CDbExpression('NOW()');
            }
            $this->par_data_alteracao = new CDbExpression('NOW()');

            return $this;
        }

        public function  afterFind() {
            parent::afterFind();
            $date = new CDateFormatter('pt_br');
            $this->par_data_partida =  $date->format('dd/MM/yyyy',$this->par_data_partida);
            $this->par_data_alteracao =  $date->format('dd/MM/yyyy - HH:mm:s',$this->par_data_alteracao);
            $this->par_data_cadastro =  $date->format('dd/MM/yyyy - HH:mm:s',$this->par_data_cadastro);
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'times' => array(self::HAS_MANY, 'Times', 'par_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'par_id' => 'Id Partida',
			'par_data_partida' => 'Data da Partida',
			'par_data_cadastro' => 'Data Cadastro',
			'par_descricao' => 'Descrição',
			'par_data_alteracao' => 'Data Alteração',
			'descricao_partida' => 'Descrição Partida',
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
		$criteria->compare('par_descricao',$this->par_descricao,true);
		$criteria->compare('par_data_alteracao',$this->par_data_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function getDescricao_partida() {
            return $this->par_data_partida.' - '.$this->par_descricao;
        }

        public function setDescricao_partida($descricao_partida) {
            $this->descricao_partida = $descricao_partida;
        }


}