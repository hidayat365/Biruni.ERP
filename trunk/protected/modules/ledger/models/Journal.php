<?php

/**
 * This is the model class for table "journals".
 *
 * The followings are the available columns in table 'journals':
 * @property integer $id
 * @property string $journal_number
 * @property string $journal_date
 * @property string $journal_value
 * @property string $journal_value_real
 * @property string $description
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 * @property integer $parent_id
 * @property integer $branch_id
 * @property integer $company_id
 * @property integer $account_id
 * @property integer $project_id
 * @property integer $department_id
 * @property integer $order_id
 * @property integer $category_id
 * @property integer $currency_id
 * @property string $currency_rate
 * @property integer $posted
 * @property integer $payment
 * @property integer $closing
 * @property integer $doc_type
 * @property integer $doc_status
 * @property string $doc_number
 * @property string $doc_duedate
 *
 * The followings are the available model relations:
 * @property JournalDetails[] $journalDetails
 * @property Branches $branch
 * @property JournalCategories $category
 * @property Companies $company
 * @property Departments $department
 * @property Journal $parent
 * @property Journal[] $journals
 * @property Projects $project
 * @property Accounts $account
 * @property Currencies $currency
 * @property Orders $order
 */
class Journal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Journal the static model class
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
		return 'journals';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_by, modified_by, parent_id, branch_id, company_id, account_id, project_id, department_id, order_id, category_id, currency_id, posted, payment, closing, doc_type, doc_status', 'numerical', 'integerOnly'=>true),
			array('journal_number, doc_number', 'length', 'max'=>100),
			array('journal_value, journal_value_real, currency_rate', 'length', 'max'=>10),
			array('description', 'length', 'max'=>1000),
			array('journal_date, created_on, modified_on, doc_duedate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, journal_number, journal_date, journal_value, journal_value_real, description, created_by, created_on, modified_by, modified_on, parent_id, branch_id, company_id, account_id, project_id, department_id, order_id, category_id, currency_id, currency_rate, posted, payment, closing, doc_type, doc_status, doc_number, doc_duedate', 'safe', 'on'=>'search'),
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
			'journalDetails' => array(self::HAS_MANY, 'JournalDetails', 'journal_id'),
			'branch' => array(self::BELONGS_TO, 'Branches', 'branch_id'),
			'category' => array(self::BELONGS_TO, 'JournalCategories', 'category_id'),
			'company' => array(self::BELONGS_TO, 'Companies', 'company_id'),
			'department' => array(self::BELONGS_TO, 'Departments', 'department_id'),
			'parent' => array(self::BELONGS_TO, 'Journal', 'parent_id'),
			'journals' => array(self::HAS_MANY, 'Journal', 'parent_id'),
			'project' => array(self::BELONGS_TO, 'Projects', 'project_id'),
			'account' => array(self::BELONGS_TO, 'Accounts', 'account_id'),
			'currency' => array(self::BELONGS_TO, 'Currencies', 'currency_id'),
			'order' => array(self::BELONGS_TO, 'Orders', 'order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'journal_number' => 'Journal Number',
			'journal_date' => 'Journal Date',
			'journal_value' => 'Journal Value',
			'journal_value_real' => 'Journal Value Real',
			'description' => 'Description',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'modified_by' => 'Modified By',
			'modified_on' => 'Modified On',
			'parent_id' => 'Parent',
			'branch_id' => 'Branch',
			'company_id' => 'Company',
			'account_id' => 'Account',
			'project_id' => 'Project',
			'department_id' => 'Department',
			'order_id' => 'Order',
			'category_id' => 'Category',
			'currency_id' => 'Currency',
			'currency_rate' => 'Currency Rate',
			'posted' => 'Posted',
			'payment' => 'Payment',
			'closing' => 'Closing',
			'doc_type' => 'Doc Type',
			'doc_status' => 'Doc Status',
			'doc_number' => 'Doc Number',
			'doc_duedate' => 'Doc Duedate',
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
		$criteria->compare('journal_number',$this->journal_number,true);
		$criteria->compare('journal_date',$this->journal_date,true);
		$criteria->compare('journal_value',$this->journal_value,true);
		$criteria->compare('journal_value_real',$this->journal_value_real,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('modified_on',$this->modified_on,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('currency_rate',$this->currency_rate,true);
		$criteria->compare('posted',$this->posted);
		$criteria->compare('payment',$this->payment);
		$criteria->compare('closing',$this->closing);
		$criteria->compare('doc_type',$this->doc_type);
		$criteria->compare('doc_status',$this->doc_status);
		$criteria->compare('doc_number',$this->doc_number,true);
		$criteria->compare('doc_duedate',$this->doc_duedate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}