<?php
$this->breadcrumbs=array(
	$this->module->id,
);
$imageBase = Yii::app()->theme->baseUrl.'/images/big_icons/';
?>
<h1>Manufacturing Module</h1>
<div class="flash-notice">Manage manufacturing related tasks here</div>

<div class="dashboardIcons span-21">

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Work Centers" />
            <div class="dashIconText "><?php echo CHtml::link('Work Centers',array('/manufacturing/workcenter')); ?></div>
        </div>
        <div class="span-6">
            <p>
                <strong><?php echo CHtml::link('Work Centers',array('/manufacturing/workcenter')); ?></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, 
				pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis 
				nec egestas quis, pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis 
				diam, facilisis nec egestas quis, pharetra eget diam.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Production Orders" />
            <div class="dashIconText "><?php echo CHtml::link('Production Orders',array('/manufacturing/order')); ?></div>
        </div>
        <div class="span-6">
            <p>
                <strong><?php echo CHtml::link('Production Orders',array('/manufacturing/order')); ?></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, 
				pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis 
				nec egestas quis, pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis 
				diam, facilisis nec egestas quis, pharetra eget diam.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Production Scheduling" />
            <div class="dashIconText "><?php echo CHtml::link('Production Scheduling',array('/manufacturing/schedule')); ?></div>
        </div>
        <div class="span-6">
            <p>
                <strong><?php echo CHtml::link('Production Scheduling',array('/manufacturing/schedule')); ?></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, 
				pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis 
				nec egestas quis, pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis 
				diam, facilisis nec egestas quis, pharetra eget diam.
            </p>
		</div>
	</div>

    <div class="span-10">
        <div class="dashIcon span-3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools2.png" alt="Production Rollover" />
            <div class="dashIconText "><?php echo CHtml::link('Production Rollover',array('/manufacturing/rollover')); ?></div>
        </div>
        <div class="span-6">
            <p>
                <strong><?php echo CHtml::link('Production Rollover',array('/manufacturing/rollover')); ?></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, 
				pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis 
				nec egestas quis, pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis 
				diam, facilisis nec egestas quis, pharetra eget diam.
            </p>
		</div>
	</div>

</div>

<div class="dashboardIcons span-21">
	&nbsp;
</div>
