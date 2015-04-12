<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->element('admin/metaHeader'); ?>
    </head>
    <body>
        <div id="loading_layer" style="display:none"><?php echo $this->Html->image("admin/ajax_loader.gif"); ?></div>

        <div id="maincontainer" class="clearfix">
            <!-- header -->
            <header>
                <?php echo $this->element('admin/topHeader'); ?>
            </header>

            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">

                    <nav>
                        <!-- breadCrumb  -->
                        <?php echo $this->element('admin/breadCrumb'); ?>
                    </nav>


                    <div id="content">

                        <?php echo $this->Session->flash(); ?>

                        <?php //echo $this->element('admin/data_header'); ?>
                        <?php //echo $this->element('admin/data_content'); ?>
                        <?php //echo $this->element('admin/data_footer'); ?>


                        <?php //echo $this->element('admin/data_header'); ?>
                        <?php echo $this->fetch('content'); ?>
                        <?php //echo $this->element('admin/data_footer'); ?>

                    </div>

                </div>
            </div>


            <?php echo $this->element('admin/sidebar'); ?>
            <?php echo $this->element('admin/metaFooter'); ?>


        </div>

        <div id="footer-debug">
            <h5>SQL Debug</h5>
            <?php //echo $this->element('sql_dump'); ?>
        </div>

    </body>
</html>

