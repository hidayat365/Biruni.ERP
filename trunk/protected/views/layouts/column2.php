<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
	<div class="span-24 last">
		<?php if ($this->menu) { ?>
        <div class="span-5 first">
            <div id="sidebar">
            <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>'Operations',
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'operations'),
                ));
                $this->endWidget();
            ?>
            </div><!-- sidebar -->
        </div>
        <?php } ?>
		<div id="content" <?php if ($this->menu) print 'class="padleft-200"'; ?>>
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>

<?php $this->endContent(); ?>

