<div class="wrapper">
	<div class="widget chartWrapper">
		<div class="title">
			<?php echo $this->Html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
			<h6><?php __($title_for_layout); ?></h6>
		</div>
		<div class="body">
			<div class="content-box syslogs-view">
				<div class="content-box-header">
					<ul>
						<li><a href="javascript:history.go(-1);"><span><?php __('Back'); ?></span></a></li>
					</ul>
				</div>
				<?php echo $this->Form->create('Language'); ?>
				<div class="content-box-content">
					<div id="logfile-content">
						<?php echo '<div class="logline">' . implode('</div><div class="logline">', explode("\n", $log_contents)) . '</div>'; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>