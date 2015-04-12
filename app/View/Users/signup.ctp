<div class="users form">
    <h2> Login</h2>
    <?php echo $this->form->create('Users', array("id" => 'AuthForm', "class" => 'Form FancyForm AuthForm ')); ?>
    <?php echo $this->element('admin/forms/form_header', array("form_label" => "Login")); ?>

    <?php echo $this->element('admin/forms/input_row', array("input_label" => "User Name", "input_name" => "username")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Password", "input_name" => "password")); ?>
    <?php echo $this->element('admin/forms/input_row', array("input_label" => "Confirm Password", "input_name" => "confpassword")); ?>


    <?php echo $this->element('admin/forms/form_footer', array()); ?>
</div>  
    <?php //echo $this->form->hidden('User.profile_image_url', array('value' => $userFbData['profile_image_url'])); ?>
    <?php //echo $this->form->hidden('User.auth_agent', array('value' => $userFbData['auth_agent'])); ?>
    <?php //echo $this->form->hidden('User.auth_id', array('value' => $userFbData['auth_id'])); ?>
    <?php// echo $this->form->hidden('User.first_name', array('value' => $userFbData['first_name'])); ?>
    <?php //echo $this->form->hidden('User.last_name', array('value' => $userFbData['last_name'])); ?>
<!--    <div class="form-field" id="">
        <label class="required">User Name</label>
        <?php //echo $this->form->text('User.username', array('class' => 'combo_fild1', 'value' => $userFbData['username'])); ?>
    </div>
    <div class="form-field" id="">
        <label class="required">Password</label>
        <?php //echo $this->form->password('User.password', array('class' => 'combo_fild1', 'value' => '')); ?>
    </div>
    <div class="form-field" id="">
        <label class="required">Confirm Password</label>
        <?php //echo $this->form->password('User.password_con', array('class' => 'combo_fild1', 'value' => '')); ?>
    </div>
    <div class="form-field" id="">
        <label for="remMe">I accept the terms of use</label>
        <input type="checkbox" name="data[User][terms]" id="UserTerms" value="0" class="checkbox" />
    </div>
    <div class="form-field">
        <?php //echo $this->form->submit(__('Log In', true), array("class" => 'dredB logMeIn', 'class' => 'Button WhiteButton Button18')); ?>
    </div>   
    <?php //echo $this->form->end(); ?>
</div>-->
<?php //echo $this->element('front/form_footer'); ?>      
