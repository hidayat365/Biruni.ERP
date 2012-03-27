<?php
$this->breadcrumbs=array(
	$this->module->id,
);
$imageBase = Yii::app()->theme->baseUrl.'/images/big_icons/';
?>
<h1>Order Entry Module</h1>
<div class="flash-notice">Manage Purchase/Material Requests, Purchase Quotations, Supplier Selection, Purchase Orders, Receiving Reports here</div>

<div class="dashboardIcons span-21">

    <div class="span-10">
        <div class="dashIcon span-3">
        	<?php echo CHtml::link('<img src="'.$imageBase.'icon-people.png" alt="Customers" />',array('/master/company/customer')); ?>
            <div class="dashIconText"><?php echo CHtml::link('Customers',array('/master/company/customer')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Customer List',array('/master/company/customer')); ?></strong>
                <br>Manage Customers list here, including add new customer, edit or delete existing customer data.
            </p>
        </div>
    </div>

    <div class="span-10">
        <div class="dashIcon span-3">
        	<?php echo CHtml::link('<img src="'.$imageBase.'icon-warehouse.png" alt="Vendors" />',array('/master/company/supplier')); ?>
            <div class="dashIconText"><?php echo CHtml::link('Suppliers',array('/master/company/supplier')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Supplier List',array('/master/company/supplier')); ?></strong>
                <br>Manage Supplier list here, including add new supplier, edit or delete existing supplier data.
            </p>
		</div>
	</div>

</div>

<div class="dashboardIcons span-21">
	&nbsp;
</div>
