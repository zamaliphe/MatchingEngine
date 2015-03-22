<?php echo $this->element('admin/data_header',array("data_title"=>"Setting")); ?>
<?php echo $this->Form->create('Setting', array('action' => 'index')); ?>
<table class="table table-bordered table-striped" id="smpl_tbl">
    <thead>
        <tr>
            <th>item</th>
            <th>value</th>
        </tr>   
    </thead>
    <tbody>   
        <?php
        $i = 0;
        $count = 0;
        foreach ($settings as $setting):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            $sett = $setting['Setting'];
            $default_options = array('value' => $sett['value'], 'type' => $sett['type'], 'label' => false);
            $options = (!empty($sett['options'])) ? json_decode($sett['options'], true) : array();
            $options = array_merge($options, $default_options);
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $sett['label']; ?></td>
                <td>
                    <div class="formRight">
                        <?php echo $this->Form->input('Setting.' . $count . '.value', $options); ?> 
                        <?php echo $this->Form->input('Setting.' . $count . '.id', array('type' => 'hidden', 'value' => $sett['id'])); ?>
                    </div>
                </td>
            </tr>
            <?php $count++; ?>
        <?php endforeach; ?>
    </tbody>     
</table>

<?php echo $this->Form->button("submit",array("class"=>"btn")); ?>
<?php echo $this->Form->end(); ?>

<?php echo $this->element('admin/data_footer'); ?>
