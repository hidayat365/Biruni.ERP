<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-4 first">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'<span class="icon icon-sitemap_color">Operations</span>',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->primaryMenu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'<span class="icon icon-sitemap_color">Administration</span>',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->adminMenu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		
		</div><!-- sidebar -->
	</div>

		<div id="content2">
			<?php echo $content; ?>
		</div><!-- content -->

</div>
<?php $this->endContent(); ?>