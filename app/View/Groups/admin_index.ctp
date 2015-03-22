
<?php echo $this->element('admin/data_header', array("data_title" => "Groups")); ?>

<table class="table table-bordered table-striped" id="smpl_tbl">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('parent_id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('alias'); ?></th>
            <th><?php echo $this->Paginator->sort('description'); ?></th>
            <th><?php echo $this->Paginator->sort('image_id'); ?></th>
            <th><?php echo $this->Paginator->sort('privacy_level'); ?></th>
            <th><?php echo $this->Paginator->sort('root_acc'); ?></th>
            <th><?php echo $this->Paginator->sort('hidden_groups'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('site_id'); ?></th>
            <th><?php echo $this->Paginator->sort('is_deleted'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($group['ParentGroup']['name'], array('controller' => 'groups', 'action' => 'view', $group['ParentGroup']['id'])); ?>
                </td>
                <td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['alias']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['description']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['image_id']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['privacy_level']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['root_acc']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['hidden_groups']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['status']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['site_id']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['is_deleted']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array(), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php echo $this->element('admin/data_footer'); ?>