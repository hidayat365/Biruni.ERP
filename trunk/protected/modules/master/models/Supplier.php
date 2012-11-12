<?php

/**
 * This is the model class for customer based on "companies" table.
 *
 * The followings are the available columns in table 'companies':
 *
 * The followings are the available model relations:
 *
 */
class Supplier extends Company
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Initializes this model.
	 */
	public function init()
	{
		parent::init();
		$this->type='S';
		$this->code=$this->generateNewCode($this->type);
		// filter
		$criteria=$this->getDbCriteria();
		$criteria->condition="type='S'";
		$this->setDbCriteria($criteria);
	}
}