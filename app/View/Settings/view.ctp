<div class="settings view">
	<h2><?php echo __('Setting'); ?></h2>
	<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dsc'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['dsc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hidden'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['hidden']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Options'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['options']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
				<li><?php echo $this->Html->link(__('Edit Setting'), array('action' => 'edit', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setting'), array('action' => 'delete', $setting['Setting']['id']), array(), __('Are you sure you want to delete # %s?', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
