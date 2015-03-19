<div class="countries view">
	<h2><?php echo __('Country'); ?></h2>
	<dl>
				<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sequence'); ?></dt>
		<dd>
			<?php echo h($country['Country']['sequence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso Code 2'); ?></dt>
		<dd>
			<?php echo h($country['Country']['iso_code_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iso Code 3'); ?></dt>
		<dd>
			<?php echo h($country['Country']['iso_code_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Format'); ?></dt>
		<dd>
			<?php echo h($country['Country']['address_format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode Required'); ?></dt>
		<dd>
			<?php echo h($country['Country']['postcode_required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($country['Country']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo h($country['Country']['tax']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
				<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), array(), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
	</ul>
</div>
