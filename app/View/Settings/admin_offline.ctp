<div class="errorWrapper">
    <span class="sadEmo"></span>
    <span class="errorTitle"><?php __('We\'re sorry, but our website is'); ?></span>
    <span class="errorNum offline"><?php __('offline'); ?></span>
    <span class="errorDesc"><?php __($system_offline_message); ?></span>
    <?php echo $this->Html->link('<span>Back to dashboard</span>', array('controller'=>'','action'=>'index'), array('class'=>'button dredB','escape'=>false)); ?>
</div>    