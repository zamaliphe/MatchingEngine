<div class="users form">		
    <?php echo $this->Form->create('User', array("class" => "main", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
    <?php echo $this->element('admin/forms/form_header', array("form_label" => "Edit User Profile")); ?>

    <?php echo $this->Form->input('id'); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "User Name", "input_name" => "username")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Email", "input_name" => "email")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "First Name", "input_name" => "first_name")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Last Name", "input_name" => "last_name")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Address", "input_name" => "address")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "State", "input_name" => "state")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "city", "input_name" => "city")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Postal Code", "input_name" => "postalcode")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Phone", "input_name" => "phone")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Fax", "input_name" => "fax")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Country", "input_name" => "country_id")); ?>

    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Status", "input_name" => "status")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Refunded", "input_name" => "refunded")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Profit", "input_name" => "profit")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Profile_img", "input_name" => "profile_img")); ?>
    
    <?php echo $this->element('admin/forms/form_footer', array()); ?>

</div>
