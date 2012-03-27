<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/jquery.css');

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1>Reporting Module</h1>
<div class="flash-notice">Manage Reporting related tasks here</div>

<?php
$imageBase = Yii::app()->theme->baseUrl.'/images/big_icons/';
$sample_content = '
    <div class="span-10">
        <div class="dashIcon span-3">
        	'.CHtml::link('<img src="'.$imageBase.'icon-chart.png" alt="Home" />',array('/site/index')).'
            <div class="dashIconText">'.CHtml::link('Home',array('/site/index')).'</div>
        </div>
        <div class="span-5">
            <p>
                <strong>'.CHtml::link('Home',array('/site/index')).'</strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, 
				pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis 
				nec egestas quis, pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis 
				diam, facilisis nec egestas quis, pharetra eget diam.
            </p>
        </div>
    </div>
    <div class="span-10">
        <div class="dashIcon span-3">
        	'.CHtml::link('<img src="'.$imageBase.'icon-picture2.png" alt="Home" />',array('/site/index')).'
            <div class="dashIconText">'.CHtml::link('Home',array('/site/index')).'</div>
        </div>
        <div class="span-5">
            <p>
                <strong>'.CHtml::link('Home',array('/site/index')).'</strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis nec egestas quis, 
				pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis diam, facilisis 
				nec egestas quis, pharetra eget diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis 
				diam, facilisis nec egestas quis, pharetra eget diam.
            </p>
        </div>
    </div>
	';

$this->widget('zii.widgets.jui.CJuiAccordion', array(
    'panels'=>array(
        'Order Entry Reports'=>$sample_content,
        'Inventory Control Reports'=>$sample_content,
		'Project Control Reports'=>$sample_content, 
		'Accounting Ledger Reports'=>$sample_content, 
		'Master Data Reports'=>$sample_content, 
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
    ),
	'htmlOptions'=>array('class'=>'shadowaccordion'),
));
?>
