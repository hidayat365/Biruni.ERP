<?php
$this->breadcrumbs=array(
	'Master',
);
?>
<h1>Administrasi Master Data</h1>

<p>
	<strong><?php echo CHtml::link('Customer List',array('/master/company/customer')); ?></strong>
    <br>Manage Customers list here, including add new customer, edit or delete existing customer data.
</p>
<p>
	<strong><?php echo CHtml::link('Supplier List',array('/master/company/supplier')); ?></strong>
    <br>Manage Supplier list here, including add new supplier, edit or delete existing supplier data.
</p>
<p>
	<strong><?php echo CHtml::link('Project List',array('/master/project')); ?></strong>
    <br>Manage Project list here, including add new project, edit or delete existing project data.
</p>
<p>
	<strong><?php echo CHtml::link('Department List',array('/master/department')); ?></strong>
    <br>Manage Department list here, including add new department, edit or delete existing department data.
</p>
<p>
	<strong><?php echo CHtml::link('Chart of Accounts List',array('/master/account')); ?></strong>
    <br>Manage Chart of Account list here, including add new account, edit or delete existing account data.
</p>
