<div class="users form">		
    <?php echo $this->Form->create('User', array("class" => "main","controller" => "users", "action"=>"changepassword", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
    <?php echo $this->element('admin/forms/form_header', array("form_label" => "Change User Password" )); ?>

    
    <?php echo $this->element('admin/forms/input_row', array( "input_label" => "password", "input_name" => "passwd")); ?>
    <?php echo $this->element('admin/forms/input_row', array( "input_label" => "New Password", "input_name" => "password")); ?>
    <?php echo $this->element('admin/forms/input_row', array( "input_label" => "Retype Password", "input_name" => "psword")); ?>
    <?php echo $this->element('admin/forms/form_footer', array()); ?>
    
</div>


