
<div class="formRow">
<!--    <div class="grid3"><label><?php //echo __($input_label);?></label></div>-->
    <div class="grid3">
    
        <?php 
        $myOptions          = array();
        $myOptions['csv']  = $this->Html->image( "csv1.png" , array('alt'=>"" )) ;
        $myOptions['xls']  = $this->Html->image( "xls1.png" , array('alt'=>"" )) ;
        $myOptions['txt']  = $this->Html->image( "txt1.png" , array('alt'=>"" ));
 
        $attributes = array('legend' => false , 'value'=>'csv');
        echo $this->Form->radio('fileType',  $myOptions , $attributes);
        ?>
 
    </div>
  
    <div class="clear"></div>
</div>