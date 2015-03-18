<div class="settings form">
	<?php echo $this->Form->create('Setting'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Setting'); ?></legend>
			<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
		echo $this->Form->input('label');
		echo $this->Form->input('dsc');
		echo $this->Form->input('order');
		echo $this->Form->input('hidden');
		echo $this->Form->input('options');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Setting.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Setting.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?></li>
			</ul>
</div>
