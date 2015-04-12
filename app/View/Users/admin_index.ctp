<?php echo $this->element('admin/forms/form_index_header',array("form_label"=>"Users","form_action"=>"Add New User")); ?>
<?php echo $this->element('admin/forms/table_toolbar',array()); ?>

<table cellpadding="0" cellspacing="0" width="100%" class="tDefault checkAll tMedia" id="checkAll"> 
    <thead>
        <tr>
            <td><?php echo $this->Paginator->sort('id'); ?></td>
            <td><?php echo $this->Paginator->sort('username'); ?></td>
            <td><?php echo $this->Paginator->sort('email'); ?></td>
            <td><?php echo $this->Paginator->sort('first_name'); ?></td>
            <td><?php echo $this->Paginator->sort('last_name'); ?></td>
            <td><?php echo $this->Paginator->sort('created'); ?></td>
            <td><?php echo $this->Paginator->sort('updated'); ?></td>
            <td class="actions"><?php echo __('Actions'); ?></td>
        </tr>
    </thead>
    <?php echo $this->element('admin/forms/form_paging',array("colspan"=>8)); ?>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
                <?php echo $this->element('admin/forms/form_action', array("item_id" => $user['User']['id'], "item_name" => $user['User']['username'])); ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->element('admin/forms/form_index_footer'); ?>