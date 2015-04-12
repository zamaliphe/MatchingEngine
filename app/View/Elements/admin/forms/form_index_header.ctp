<div class="widget fluid">
    <div class="whead">
        <div class="grid6"> 
            <h6><?php echo __($form_label); ?></h6>
        </div>
        <div class="grid6 buttonM" style=""> 
        <?php $button = '<button class="buttonM bBrown floatR"><span class="icol-add"></span><span>'. __($form_action) .'</span></button>';?>
        <?php echo $this->Html->link($button, array( "action" => "add"), array("class" => "","title"=>$form_action,"escape"=>FALSE)) ?>
        </div>
        <div class="clear"></div>
    </div>