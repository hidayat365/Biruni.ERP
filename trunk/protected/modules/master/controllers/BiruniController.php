<?php
/**
 * Base controller class
 * @author tomasz.suchanek
 * @since 0.6
 * @package Yum.core
 *
 */
abstract class BiruniController extends Controller 
{
	public $adminMenu = array(
		array('label'=>'Manage Branches', 'url'=>array('/master/branch')),
		array('label'=>'Manage Departments', 'url'=>array('/master/department')),
		array('label'=>'Manage Projects', 'url'=>array('/master/project')),
		array('label'=>'Manage Customers', 'url'=>array('/master/company/customer')),
		array('label'=>'Manage Suppliers', 'url'=>array('/master/company/supplier')),
		array('label'=>'Manage Accounts', 'url'=>array('/master/account')),
		array('label'=>'Manage Item Categories', 'url'=>array('/master/itemcategory')),
		array('label'=>'Manage Items', 'url'=>array('/master/item')),
		array('label'=>'Manage Order Categories', 'url'=>array('/master/ordercategory')),
	);
}
?>
