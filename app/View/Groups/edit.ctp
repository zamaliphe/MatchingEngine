<div class="groups form">
	<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
			<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('name');
		echo $this->Form->input('alias');
		echo $this->Form->input('description');
		echo $this->Form->input('image_id');
		echo $this->Form->input('privacy_level');
		echo $this->Form->input('root_acc');
		echo $this->Form->input('hidden_groups');
		echo $this->Form->input('status');
		echo $this->Form->input('site_id');
		echo $this->Form->input('is_deleted');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
