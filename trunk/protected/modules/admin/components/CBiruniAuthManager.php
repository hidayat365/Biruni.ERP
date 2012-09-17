<?php

class CBiruniAuthManager extends CDbAuthManager
{
	/**
	 * @var string the name of the table storing authorization items. Defaults to 'AuthItem'.
	 */
	public $itemTable='Auth_Item';
	/**
	 * @var string the name of the table storing authorization item hierarchy. Defaults to 'AuthItemChild'.
	 */
	public $itemChildTable='Auth_ItemChild';
	/**
	 * @var string the name of the table storing authorization item assignments. Defaults to 'AuthAssignment'.
	 */
	public $assignmentTable='Auth_Assignment';
}
