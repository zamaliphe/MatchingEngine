
<?php echo $this->element('admin/data_header', array("data_title" => "Users")); ?>

<table class="table table-bordered table-striped" id="smpl_tbl">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('username'); ?></th>
            <th><?php echo $this->Paginator->sort('password'); ?></th>
            <th><?php echo $this->Paginator->sort('is_admin'); ?></th>
            <th><?php echo $this->Paginator->sort('group_id'); ?></th>
            <th><?php echo $this->Paginator->sort('profile_imageid'); ?></th>
            <th><?php echo $this->Paginator->sort('first_name'); ?></th>
            <th><?php echo $this->Paginator->sort('last_name'); ?></th>
            <th><?php echo $this->Paginator->sort('city'); ?></th>
            <th><?php echo $this->Paginator->sort('state_id'); ?></th>
            <th><?php echo $this->Paginator->sort('country_id'); ?></th>
            <th><?php echo $this->Paginator->sort('zip'); ?></th>
            <th><?php echo $this->Paginator->sort('last_login_date_time'); ?></th>
            <th><?php echo $this->Paginator->sort('last_login_ip'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['is_admin']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
                </td>
                <td><?php echo h($user['User']['profile_imageid']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['city']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($user['State']['name'], array('controller' => 'states', 'action' => 'view', $user['State']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($user['Country']['name'], array('controller' => 'countries', 'action' => 'view', $user['Country']['id'])); ?>
                </td>
                <td><?php echo h($user['User']['zip']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['last_login_date_time']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['last_login_ip']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['status']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->element('admin/data_footer'); ?>