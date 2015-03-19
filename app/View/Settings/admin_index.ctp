<?php echo $this->Form->create('Setting', array('action' => 'index')); ?>
<div class="widget chartWrapper" style="width: 80%;margin-left: auto;margin-right: auto;">
    <div class="title">
        <?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
        <h6><?php __('Settings'); ?></h6>
    </div>
    <div class="body">
        <table width="100%" cellpadding="0" cellspacing="0" class="sTable" >
            <tbody>   
                <?php
                $i = 0;
                $count = 0;
                foreach ($settings as $setting):
                    $class = null;
                    if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                    }
                    $sett = $setting['Setting'];
                    $default_options  = array('value' => $sett['value'],'type'=>$sett['type'],'label' => false);
                    $options = (!empty($sett['options'])) ? json_decode($sett['options'],true) : array();
                    $options = array_merge($options,$default_options);
                    ?>
                    <tr<?php echo $class; ?>>
                        <?php echo $this->Form->input('Setting.' . $count . '.id', array('type' => 'hidden', 'value' => $sett['id'])); ?>
                        <div class="users form">
                            <fieldset>
                                <div class="formRow">
                                    <label for="name"><?php echo $sett['label']; ?></label>
                                    <div class="formRight">
                                        <?php echo $this->Form->input('Setting.' . $count . '.value' , $options ); ?> 
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </tr>
                <?php $count++; ?>
            <?php endforeach; ?>
            </tbody>     
        </table>
        <?php echo $this->element('admin/forms/form_submit'); ?>
        <br/>
        <br/>
    </div>
</div>
