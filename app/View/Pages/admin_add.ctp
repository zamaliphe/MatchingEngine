<?php echo $this->element("admin/forms/ckeditor"); ?>
<div class="widget chartWrapper1" style="width: 80%;margin-left: auto;margin-right: auto;">
    <div class="title">
        <?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
        <h6><?php __('Add New Page'); ?></h6>
    </div>
    <div class="body">
        <div class="users form">
            <?php echo $this->Form->create('Page', array("id" => "validate")); ?>
            <fieldset>
                <div class="formRow">
                    <label for="title"><?php __('Title'); ?><span class="req">*</span></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('title', array("id" => "title", "class" => "validate[required]", 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php echo $this->element('admin/forms/site_select'); ?>
                <div class="formRow">
                    <label for="metadescription"><?php __('Description'); ?></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('metadescription', array("id" => "metadescription", 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="metakeywords"><?php __('Keywords'); ?></label>
                    <div class="formRight">
                        <?php echo $this->Form->input('metakeywords', array("id" => "metakeywords", 'div' => false, 'label' => false)); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="ContentBodyHtml"><?php __('Content'); ?><span class="req">*</span></label>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <?= $this->Form->input('Page.content', array("class" => "validate[required]", 'div' => false, 'label' => false)); ?>
                    <?= $fck->run('Page.content'); ?>
                    <div class="clear"></div>
                </div>
                <?php echo $this->element('admin/forms/form_submit'); ?>
            </fieldset>
        </div>
    </div>
</div>

