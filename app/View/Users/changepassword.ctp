<div class="widget chartWrapper1" style="width: 80%;margin-left: auto;margin-right: auto;">
    <div class="title">
        <?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
        <h6><?php __('Change User Password'); ?></h6>
    </div>
    <div class="body">
        <div class="users form">
            <?php echo $this->Form->create('User',array("controller" => "users", "action"=>"changepassword")); ?>
            <fieldset>
                <div class="formRow">
                    <label for="password">Current Password<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('password', array('type'=>'password' ,"id" => "username", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="password">Password<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('new_password', array('type'=>'password' ,"id" => "password", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="first_name">Retype Password<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('retype_password', array('type'=>'password' ,"id" => "retypepassword", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div><br>
               <?php echo $this->Form->submit('Change to new password'); ?>
            </fieldset>

        </div>
    </div>
</div>