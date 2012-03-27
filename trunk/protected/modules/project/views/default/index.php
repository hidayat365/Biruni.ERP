<?php
$this->breadcrumbs=array(
	$this->module->id,
);
$imageBase = Yii::app()->theme->baseUrl.'/images/big_icons/';
?>
<h1>Project Control Module</h1>
<div class="flash-notice">Manage Project Control related tasks here</div>

<div class="dashboardIcons span-21">

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

</div>

<div class="dashboardIcons span-21">
	&nbsp;
</div>
