<div id="content">
    <?php echo $this->element('admin/forms/contentTop'); ?>
    <?php echo $this->element('admin/forms/Breadcrumbs'); ?>
    
    <!-- Main content -->
    <div class="wrapper">
        <?php //echo $this->element('admin/forms/middle_nave'); ?>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    <!-- Main content ends -->
    
</div>