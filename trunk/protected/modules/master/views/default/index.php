<?php
$this->breadcrumbs=array(
	'Master',
);
?>
<h1>Administrasi Master Data</h1>

<p>
	<strong><?php echo CHtml::link('Customer List',array('companies/customer')); ?></strong>
    <br>Manage Customers list here, including add new customer, edit or delete existing customer data.
</p>
<p>
	<strong><?php echo CHtml::link('Supplier List',array('companies/supplier')); ?></strong>
    <br>Manage Supplier list here, including add new supplier, edit or delete existing supplier data.
</p>
<p>
	<strong><?php echo CHtml::link('Project List',array('projects')); ?></strong>
    <br>Manage Project list here, including add new project, edit or delete existing project data.
</p>
<p>
	<strong><?php echo CHtml::link('Deparetment List',array('departments')); ?></strong>
    <br>Manage Department list here, including add new department, edit or delete existing department data.
</p>
<p>
	<strong><?php echo CHtml::link('Chart of Accounts List',array('accounts')); ?></strong>
    <br>Manage Chart of Account list here, including add new account, edit or delete existing account data.
</p>
