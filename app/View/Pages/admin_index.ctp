<div class="widget chartWrapper">
    <div class="body">
        <!-- Dynamic table -->
        <div class="widget">
            <div class="title tHeadTitle">
                <?php echo $this->element('admin/forms/titletextwraper', array('form_title' => 'Pages')); ?>
                <?php echo $this->element('admin/forms/paging_limit'); ?>
                <?php echo $this->element('admin/forms/form_search'); ?>
            </div>       
            <table cellpadding="0" cellspacing="0" border="0" class="display sTable tResizable">
                <thead>
                    <tr>
                        <td class="sortCol"><div><?php echo $this->Paginator->sort('title'); ?><span></span></div></td>
                        <td class="sortCol"><div><?php echo $this->Paginator->sort("URL",'url'); ?><span></span></div></td>
                        <td class="center"><div><?php __('Actions'); ?></td>
                    </tr>
                </thead>
                <?php echo $this->element('admin/forms/pagination', array('colspan' => 3)); ?>
                <tbody>
                    <?php
                    $i = 0;
                    if (empty($pages)) :
                        echo $this->element('admin/forms/emtptables', array('colspan' => 3));
                    else:
                        foreach ($pages as $page):
                            $class = null;
                            if ($i++ % 2 == 0) {
                                $class = ' class="gradeA"';
                            }
                            ?>
                            <tr<?php echo $class; ?>>
                                <td><?php echo $page['Page']['title']; ?>&nbsp;</td>
                                <td><?php echo $page['Page']['url']; ?>&nbsp;</td>
                                <td class="actBtns">
                                    <?php echo $this->element('admin/forms/actions', array('action_id' => $page['Page']['id'], 'title' => 'Page', 'delete_name' => $page['Page']['title'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>     
            </table>  
        </div>
    </div>
</div>
