<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->element('admin/metaHeader'); ?>
    </head>
    <body class="login_page">
        <div id="loading_layer" style="display:none"><?php echo $this->Html->image("admin/ajax_loader.gif"); ?></div>

        <div id="maincontainer" class="clearfix">
            <!-- header -->
            <header>
                <?php echo $this->element('admin/topHeader_public'); ?>
            </header>

            <div style="padding-top: 40px;">&nbsp;</div>


            <!-- main content -->
            <div id="contentwrapper">
                <div id="content">

                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>

                </div>
            </div>


            <?php //echo $this->element('admin/sidebar'); ?>
            <?php echo $this->element('admin/metaFooter'); ?>

        </div>

        <div id="footer-debug">
            <h5>SQL Debug</h5>
            <?php //echo $this->element('sql_dump'); ?>
        </div>

    </body>
</html>

