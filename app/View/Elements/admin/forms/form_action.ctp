<td class="actions">
    <?php echo $this->Html->link('<span data-icon="" class="fs1 iconb"></span>', array('action' => 'view', $item_id),array("class"=>"tablectrl_small bGreen tipS","escape"=>FALSE,"original-title"=>"View")); ?>
    <?php echo $this->Html->link('<span data-icon="" class="iconb"></span>', array('action' => 'edit', $item_id),array("class"=>"tablectrl_small bLightBlue tipS","escape"=>FALSE,"original-title"=>"Edit")); ?>
    <?php echo $this->Form->postLink('<span data-icon="" class="iconb"></span>', array('action' => 'delete', $item_id),array("class"=>"tablectrl_small bRed tipS","escape"=>FALSE,"original-title"=>"Delete"), __('Are you sure you want to delete # %s?', $item_name)); ?>
</td>