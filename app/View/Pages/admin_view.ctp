<div class="Pages view">
    <div class="wrapper">
        <div class="widget">
            <div class="title"><?php echo $html->image('icons/dark/stats.png', array("class" => 'titleIcon')); ?>
                <h6><?php __('View Page Content'); ?></h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable" id="res">
                <thead>
                    <tr>
                        <td width="25%"><?php __('Page Data'); ?></td>
                        <td width="75%"><?php __('Page Details'); ?></td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center"><?php __('Title'); ?></td>
                        <td align="center"><?php echo $page['Page']['title']; ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?php __('URL'); ?></td>
                        <td align="center"><?php echo $page['Page']['url']; ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?php __('Description'); ?></td>
                        <td align="center"><?php echo $page['Page']['metadescription']; ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?php __('Keywords'); ?></td>
                        <td align="center"><?php echo $page['Page']['metakeywords']; ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?php __('Content'); ?></td>
                        <td align="center"><?php echo $page['Page']['content']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>