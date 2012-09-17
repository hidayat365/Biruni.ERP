<?php

/**
 * This is the model class for customer based on "companies" table.
 *
 * The followings are the available columns in table 'companies':
 *
 * The followings are the available model relations:
 *
 */
class Customer extends Company
{
	/**
	 * Initializes this model.
	 */
	public function init()
	{
		parent::init();
		$this->type='C';
		$this->code=$this->generateNewCode($this->type);
		$criteria=$this->getDbCriteria();
		$criteria->condition="type='C'";
		$this->setDbCriteria($criteria);
	}
}