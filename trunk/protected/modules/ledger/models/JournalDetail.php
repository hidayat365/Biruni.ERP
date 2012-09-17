<?php

/**
 * This is the model class for table "journal_details".
 *
 * The followings are the available columns in table 'journal_details':
 * @property integer $id
 * @property integer $journal_id
 * @property integer $account_id
 * @property integer $item_id
 * @property integer $order_id
 * @property integer $department_id
 * @property integer $project_id
 * @property string $debet
 * @property string $debet_real
 * @property string $credit
 * @property string $credit_real
 * @property string $quantity
 * @property string $unit_price
 * @property string $tax1_pct
 * @property string $tax2_pct
 * @property string $remarks
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Accounts $account
 * @property Departments $department
 * @property Items $item
 * @property Journals $journal
 * @property Orders $order
 * @property Projects $project
 */
class JournalDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JournalDetail the static model class
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
		return 'journal_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('journal_id, account_id', 'required'),
			array('journal_id, account_id, item_id, order_id, department_id, project_id', 'numerical', 'integerOnly'=>true),
			array('debet, debet_real, credit, credit_real, quantity, unit_price, tax1_pct, tax2_pct', 'length', 'max'=>10),
			array('remarks, description', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, journal_id, account_id, item_id, order_id, department_id, project_id, debet, debet_real, credit, credit_real, quantity, unit_price, tax1_pct, tax2_pct, remarks, description', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'Accounts', 'account_id'),
			'department' => array(self::BELONGS_TO, 'Departments', 'department_id'),
			'item' => array(self::BELONGS_TO, 'Items', 'item_id'),
			'journal' => array(self::BELONGS_TO, 'Journals', 'journal_id'),
			'order' => array(self::BELONGS_TO, 'Orders', 'order_id'),
			'project' => array(self::BELONGS_TO, 'Projects', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'journal_id' => 'Journal',
			'account_id' => 'Account',
			'item_id' => 'Item',
			'order_id' => 'Order',
			'department_id' => 'Department',
			'project_id' => 'Project',
			'debet' => 'Debet',
			'debet_real' => 'Debet Real',
			'credit' => 'Credit',
			'credit_real' => 'Credit Real',
			'quantity' => 'Quantity',
			'unit_price' => 'Unit Price',
			'tax1_pct' => 'Tax1 Pct',
			'tax2_pct' => 'Tax2 Pct',
			'remarks' => 'Remarks',
			'description' => 'Description',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('journal_id',$this->journal_id);
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('debet',$this->debet,true);
		$criteria->compare('debet_real',$this->debet_real,true);
		$criteria->compare('credit',$this->credit,true);
		$criteria->compare('credit_real',$this->credit_real,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('unit_price',$this->unit_price,true);
		$criteria->compare('tax1_pct',$this->tax1_pct,true);
		$criteria->compare('tax2_pct',$this->tax2_pct,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}