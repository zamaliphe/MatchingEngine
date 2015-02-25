<div class="wrapper">
	<div class="widget chartWrapper">
		<div class="title">
			<?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
			<h6><?php __($title_for_layout); ?></h6>
		</div>
		<div class="body">
			<div class="content-box sysinfo-index">
				<?php echo $form->create('Language'); ?>
				<div class="content-box-content gird-table">
					<div id="sysinfo-content">
						<table cellpadding="3" cellspacing="3" width="100%">
							<tr>
								<td align="left" width="15%"><?php echo __("All Users", true); ?> </td>
								<td align="left"><?php echo $data["usersAll"]; ?></td>
							</tr>
							<tr>
								<td align="left" width="15%"><?php echo __("Active users", true); ?></td>
								<td align="left"><?php echo $data["usersActive"]; ?></td>
							</tr>
							<tr>
								<td align="left" width="15%"><?php echo __("In Active users", true); ?> </td>
								<td align="left"><?php echo $data["usersInActive"]; ?></td>
							</tr>
							<tr>
								<td align="left" width="15%"><?php echo __("registered users today", true); ?></td>
								<td align="left"><?php echo $data["usersToday"]; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>