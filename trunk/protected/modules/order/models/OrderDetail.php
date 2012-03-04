<?php

/**
 * This is the model class for table "order_details".
 *
 * The followings are the available columns in table 'order_details':
 * @property integer $id
 * @property integer $item_id
 * @property integer $order_id
 * @property integer $detail_id
 * @property string $quantity
 * @property string $price
 * @property string $disc_pct
 * @property string $disc_amount
 * @property string $tax1_pct
 * @property string $tax2_pct
 * @property string $remarks
 * @property integer $weight
 *
 * The followings are the available model relations:
 * @property Orders $order
 * @property Items $item
 * @property OrderDetail $detail
 * @property OrderDetail[] $orderDetails
 */
class OrderDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrderDetail the static model class
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
		return 'order_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, order_id, detail_id, weight', 'numerical', 'integerOnly'=>true),
			array('quantity, price, disc_pct, disc_amount, tax1_pct, tax2_pct, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, order_id, detail_id, quantity, price, disc_pct, disc_amount, tax1_pct, tax2_pct, remarks, weight', 'safe', 'on'=>'search'),
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
			'order' => array(self::BELONGS_TO, 'Orders', 'order_id'),
			'item' => array(self::BELONGS_TO, 'Items', 'item_id'),
			'detail' => array(self::BELONGS_TO, 'OrderDetail', 'detail_id'),
			'orderDetails' => array(self::HAS_MANY, 'OrderDetail', 'detail_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_id' => 'Item',
			'order_id' => 'Order',
			'detail_id' => 'Detail',
			'quantity' => 'Quantity',
			'price' => 'Price',
			'disc_pct' => 'Disc Pct',
			'disc_amount' => 'Disc Amount',
			'tax1_pct' => 'Tax1 Pct',
			'tax2_pct' => 'Tax2 Pct',
			'remarks' => 'Remarks',
			'weight' => 'Weight',
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
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('detail_id',$this->detail_id);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('disc_pct',$this->disc_pct,true);
		$criteria->compare('disc_amount',$this->disc_amount,true);
		$criteria->compare('tax1_pct',$this->tax1_pct,true);
		$criteria->compare('tax2_pct',$this->tax2_pct,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('weight',$this->weight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}