<div class="formRow">
    <div class="grid3"><label><?php echo __($input_label);?></label></div>
    <div class="grid9">
        <?php $input_name = 'Setting.' . $count . '.value'?>
        <?php echo $this->Form->input($input_name , $options); ?>
         <?php echo $this->Form->input('Setting.' . $count . '.id', array('type' => 'hidden', 'value' => $sett_id)); ?>
    </div>
    <div class="clear"></div>
</div>