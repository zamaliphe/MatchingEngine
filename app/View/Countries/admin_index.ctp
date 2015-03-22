
<?php echo $this->element('admin/data_header', array("data_title" => "Countries")); ?>

<table class="table table-bordered table-striped" id="smpl_tbl">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('sequence'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('iso_code_2'); ?></th>
            <th><?php echo $this->Paginator->sort('iso_code_3'); ?></th>
            <th><?php echo $this->Paginator->sort('address_format'); ?></th>
            <th><?php echo $this->Paginator->sort('postcode_required'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
            <th><?php echo $this->Paginator->sort('tax'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($countries as $country): ?>
            <tr>
                <td><?php echo h($country['Country']['id']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['sequence']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['name']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['iso_code_2']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['iso_code_3']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['address_format']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['postcode_required']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['status']); ?>&nbsp;</td>
                <td><?php echo h($country['Country']['tax']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $country['Country']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $country['Country']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $country['Country']['id']), array(), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->element('admin/data_footer'); ?>