<div class="users view">
    <?php echo $this->element('admin/forms/form_view_header', array("form_label" => " User ")); ?>
    <table cellpadding="0" cellspacing="0" width="100%" class="tDefault checkAll tMedia" id="checkAll">
        <thead>
            <tr>
                <td width="40%"><?php echo __('User Data'); ?></td>
                <td><?php echo __('User Details'); ?></td>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td><?php echo __('User Name'); ?></td>
                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Email'); ?></td>
                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('First Name'); ?></td>
                <td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Last Name'); ?></td>
                <td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
            </tr>
            <tr>                
                <td><?php echo __('Address'); ?></td>
                <td><?php echo h($user['User']['address']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('State'); ?></td>
                <td><?php echo h($user['User']['state']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('City'); ?></td>
                <td><?php echo h($user['User']['city']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Postal Code'); ?></td>
                <td><?php echo h($user['User']['postalcode']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Phone'); ?></td>
                <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Fax'); ?></td>
                <td><?php echo h($user['User']['fax']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Country'); ?></td>
                <td><?php echo h($user['User']['country_id']); ?>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo __('Profile Img'); ?></td>
                <td><?php echo h($user['User']['profile_img']); ?>&nbsp;</td>
            </tr>

        </tbody>
    </table>
    
    <?php echo $this->element('admin/forms/form_index_footer'); ?>
</div>

