<?php
$this->breadcrumbs=array(
	'Master',
);
$imageBase = Yii::app()->theme->baseUrl.'/images/big_icons/';
?>
<h1>Administrasi Master Data</h1>
<div class="flash-notice">Manage master data here for use in other modules throughout this application</div>

<div class="dashboardIcons span-21">

    <div class="span-10">
        <div class="dashIcon span-3">
        	<?php echo CHtml::link('<img src="'.$imageBase.'icon-people.png" alt="Customers" />',array('/master/customer/customer')); ?>
            <div class="dashIconText"><?php echo CHtml::link('Customers',array('/master/customer')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Customer List',array('/master/customer')); ?></strong>
                <br>Manage Customers list here, including add new customer, edit or delete existing customer data.
            </p>
        </div>
    </div>

    <div class="span-10">
        <div class="dashIcon span-3">
        	<?php echo CHtml::link('<img src="'.$imageBase.'icon-warehouse.png" alt="Vendors" />',array('/master/supplier')); ?>
            <div class="dashIconText"><?php echo CHtml::link('Suppliers',array('/master/supplier')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Supplier List',array('/master/supplier')); ?></strong>
                <br>Manage Supplier list here, including add new supplier, edit or delete existing supplier data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-building.png" alt="Departments" />
            <div class="dashIconText "><?php echo CHtml::link('Departments',array('/master/department')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Department List',array('/master/department')); ?></strong>
                <br>Manage Department list here, including add new department, edit or delete existing department data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Projects" />
            <div class="dashIconText "><?php echo CHtml::link('Projects',array('/master/project')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Project List',array('/master/project')); ?></strong>
                <br>Manage Project list here, including add new project, edit or delete existing project data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Project Types" />
            <div class="dashIconText "><?php echo CHtml::link('Project Types',array('/master/projectType')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Project Type List',array('/master/projectType')); ?></strong>
                <br>Manage Project Type list here, including add new project, edit or delete existing project data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Project Categories" />
            <div class="dashIconText "><?php echo CHtml::link('Project Categories',array('/master/projectCategory')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Project Category List',array('/master/projectCategory')); ?></strong>
                <br>Manage Project Category list here, including add new project, edit or delete existing project data.
            </p>
		</div>
	</div>

    <!--
    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-barcode2.png" alt="Item Category" />
            <div class="dashIconText "><?php echo CHtml::link('Item Categories',array('/master/itemcategory')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Item Category List',array('/master/itemcategory')); ?></strong>
                <br>Item Category list here, including add new account, edit or delete existing item category data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-barcode.png" alt="Items" />
            <div class="dashIconText "><?php echo CHtml::link('Items',array('/master/item')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Item Master List',array('/master/item')); ?></strong>
                <br>Item Master list here, including add new account, edit or delete existing item master data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-address-book.png" alt="Chart of Account" />
            <div class="dashIconText "><?php echo CHtml::link('Chart of Accounts',array('/master/account')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Chart of Account List',array('/master/account')); ?></strong>
                <br>Manage Chart of Account list here, including add new account, edit or delete existing account data.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-shopping-cart3.png" alt="Order Categories" />
            <div class="dashIconText "><?php echo CHtml::link('Order Categories',array('/master/ordercategory')); ?></div>
        </div>
        <div class="span-5">
            <p>
                <strong><?php echo CHtml::link('Order Category List',array('/master/ordercategory')); ?></strong>
                <br>Manage Order Type/Category list here, including add new order category, edit or delete existing order category data.
            </p>
		</div>
	</div>
    -->

</div>

<div class="dashboardIcons span-21">
	&nbsp;
</div>
