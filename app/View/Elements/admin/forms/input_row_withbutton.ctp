<div class="formRow">
    <div>
    <div class="grid3"><label><?php echo __($input_label);?></label></div>
    <div class="grid9">
        <span class="grid3"> <?php echo $this->Form->input($input_name); ?> </span>
        <span class="grid6"> <?php echo $this->Html->link($this->Form->button(__($btn_name) , array('type' =>__($btn_type) ,'class' => "buttonS bBlue ")),  array('controller' => 'customers', 'action' => 'addfunds'), array("class" => "active","escape"=>false)); ?> </span>
    </div>
    <div class="clear"></div>
    </div>
</div>
    
