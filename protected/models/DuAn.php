<?php

/**
 * This is the model class for table "{{DUAN}}".
 *
 * The followings are the available columns in table '{{DUAN}}':
 * @property string $id
 * @property string $maduan
 * @property string $tenduan
 * @property string $diachi
 * @property string $bandoduan
 * @property string $project_manager_id
 * @property integer $date_created
 * @property integer $date_updated
 */
class DuAn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DuAn the static model class
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
		return '{{DUAN}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diachi, bandoduan, project_manager_id', 'required'),
			array('date_created, date_updated', 'numerical', 'integerOnly'=>true),
			array('maduan', 'length', 'max'=>100),
			array('tenduan, bandoduan', 'length', 'max'=>300),
			array('diachi', 'length', 'max'=>500),
			array('project_manager_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, maduan, tenduan, diachi, bandoduan, project_manager_id, date_created, date_updated', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'maduan' => 'Maduan',
			'tenduan' => 'Tenduan',
			'diachi' => 'Diachi',
			'bandoduan' => 'Bandoduan',
			'project_manager_id' => 'Project Manager',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('maduan',$this->maduan,true);
		$criteria->compare('tenduan',$this->tenduan,true);
		$criteria->compare('diachi',$this->diachi,true);
		$criteria->compare('bandoduan',$this->bandoduan,true);
		$criteria->compare('project_manager_id',$this->project_manager_id,true);
		$criteria->compare('date_created',$this->date_created);
		$criteria->compare('date_updated',$this->date_updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}