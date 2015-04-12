<?php echo $this->element('front/form_header'); ?>
<div class="widget chartWrapper1" style="width: 80%;margin-left: auto;margin-right: auto;">
    <div class="title">
        <?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
        <h6><?php __('Edit User Profile'); ?></h6>
    </div>
    <div class="body">
        <div class="users form">
            <?php echo $this->Form->create('User', array("id" => "validate")); ?>
            <?php echo $this->Form->input('id'); ?>
            <fieldset>
                <div class="formRow">
                    <label for="username">Username<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('username', array("id" => "username", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="first_name">First Name<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('first_name', array("id" => "first_name", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="last_name">Last Name<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('last_name', array("id" => "last_name", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="email">E-mail<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('email', array("id" => "email", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="city">city<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('city', array("id" => "city",  'style'=>'margin: 5px;padding: 5px;width: 242px;','div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="state_id">states<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('state_id', array("id" => "state_id", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'empty' => true, 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="country">country<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('country_id', array("id" => "country_id", 'style'=>'margin: 5px;padding: 5px;width: 242px;', 'empty' => true, 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="zip">Zip<span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('zip', array("id" => "zip", 'style'=>'margin: 5px;padding: 5px;width: 242px;','div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <div class="formRight"><br>
                        <?php echo $this->Form->submit('Edit User Profile'); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                
            </fieldset>
        </div>
    </div>
</div>
<?php echo $this->element('front/form_footer'); ?>