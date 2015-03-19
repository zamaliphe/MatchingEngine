<div class="countries form">
	<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Add Country'); ?></legend>
			<?php
		echo $this->Form->input('sequence');
		echo $this->Form->input('name');
		echo $this->Form->input('iso_code_2');
		echo $this->Form->input('iso_code_3');
		echo $this->Form->input('address_format');
		echo $this->Form->input('postcode_required');
		echo $this->Form->input('status');
		echo $this->Form->input('tax');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

				<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
			</ul>
</div>
