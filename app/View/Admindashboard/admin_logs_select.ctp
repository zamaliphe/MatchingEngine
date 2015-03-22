<div class="wrapper">
	<div class="widget chartWrapper">
		<div class="title">
			<?php echo $this->Html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
			<h6><?php __($title_for_layout); ?></h6>
		</div>
		<div class="body">
			<div class="content-box syslogs-select">
				<?php echo $this->Form->create('Language'); ?>
				<div class="content-box-content">
					<ul>
						<?php foreach ($logfiles as $logfile): $logfile = str_replace(LOGS, '', $logfile); ?>
							<li><?php echo $this->Html->link($logfile, array('plugin' => null, str_replace(DIRECTORY_SEPARATOR, ',', $logfile))); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>