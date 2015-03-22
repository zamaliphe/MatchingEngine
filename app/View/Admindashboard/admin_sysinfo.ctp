<div class="wrapper">
	<div class="widget chartWrapper">
		<div class="title">
			<?php echo $this->Html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
			<h6><?php __($title_for_layout); ?></h6>
		</div>
		<div class="body">
			<div class="content-box sysinfo-index">
				<?php echo $this->Form->create('Language'); ?>
				<div class="content-box-content gird-table">
					<div id="sysinfo-content">
						<table cellpadding="3" cellspacing="3" width="100%">
							<tr>
								<td align="left" width="15%">Server OS</td>
								<td align="left"><?php echo php_uname() . PHP_OS; ?></td>
							</tr>
							<tr>
								<td align="left">PHP Version</td>
								<td align="left"><?php echo phpversion(); ?></td>
							</tr>
							<tr>
								<td align="left">Zend engine version</td>
								<td align="left"><?php echo zend_version(); ?></td>
							</tr>
							<tr>
								<td align="left">PHP Sapi name</td>
								<td align="left"><?php echo php_sapi_name(); ?></td>
							</tr>
							<tr>
								<td colspan="2">&nbsp;</td>
							</tr>
							<tr>
								<td align="left">MySQL server version</td>
								<td align="left"><?php echo mysql_get_server_info(); ?></td>
							</tr>
							<tr>
								<td align="left">MySQL protocol version</td>
								<td align="left"><?php echo mysql_get_proto_info(); ?></td>
							</tr>
							<tr>
								<td align="left">MySQL client info</td>
								<td align="left"><?php echo mysql_get_client_info(); ?></td>
							</tr>
							<tr>
								<td align="left">MySQL host info</td>
								<td align="left"><?php echo mysql_get_host_info(); ?></td>
							</tr>
							<tr>
								<td colspan="2">&nbsp;</td>
							</tr>
						</table>

						<div id="phpinfo">
							<?php
							$oc = ob_get_contents();
							ob_end_clean();
							ob_start();
							phpinfo();
							$phpinfo = ob_get_contents();
							ob_end_clean();
							ob_start();
							echo $oc;
							$phpinfo = str_replace(array('<style type="text/css">', '</style>'), array('<div class="phpinfo-removed">', '&nbsp;</div>'), $phpinfo);
							echo $phpinfo
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>