<?php echo $this->Form->end(); ?>

<div class="password-item formRow" >
    <?php echo $this->Form->create(array("action" => "pedit" )); ?>
    <?php echo $this->Form->submit('Edit User Profile', array('class' => 'buttonS bLightBlue')); ?>
    <?php echo $this->Form->end(); ?></div>
<div class="clear"></div>

<div class="password-item formRow" >
    <?php echo $this->Form->create(array("action" => "changepassword")); ?>
    <?php echo $this->Form->submit('Change Password', array('class' => 'buttonS bLightBlue')); ?>
    <?php echo $this->Form->end(); ?></div>
<div class="clear"></div>
 

</div>

</fieldset> 

