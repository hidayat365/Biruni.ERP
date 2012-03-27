<?php
$this->breadcrumbs=array(
	$this->module->id,
);
$imageBase = Yii::app()->theme->baseUrl.'/images/big_icons/';
?>
<h1>Invenrtory Control Module</h1>
<div class="flash-notice">Manage Inventory Control related tasks here</div>

<div class="dashboardIcons span-21">

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

</div>


<div class="dashboardIcons span-21">
	&nbsp;
</div>
