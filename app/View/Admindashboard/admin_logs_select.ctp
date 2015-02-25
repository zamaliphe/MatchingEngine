<div class="wrapper">
	<div class="widget chartWrapper">
		<div class="title">
			<?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
			<h6><?php __($title_for_layout); ?></h6>
		</div>
		<div class="body">
			<div class="content-box syslogs-select">
				<?php echo $form->create('Language'); ?>
				<div class="content-box-content">
					<ul>
						<?php foreach ($logfiles as $logfile): $logfile = str_replace(LOGS, '', $logfile); ?>
							<li><?php echo $html->link($logfile, array('plugin' => null, str_replace(DIRECTORY_SEPARATOR, ',', $logfile))); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>