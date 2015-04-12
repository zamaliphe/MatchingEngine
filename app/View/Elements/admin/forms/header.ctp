<?php echo $this->Html->charset(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo $title_for_layout; ?>:</title>

<?php


$this->start('meta');
echo $this->Html->meta('icon');
$this->end();


$this->start('css');
echo $this->Html->css('admin/styles.css');
$this->end();

$this->start('script');

echo $this->Html->script('admin/libs/jquery/1.7/jquery.min.js');
echo $this->Html->script('admin/libs/jqueryui/1.8/jquery-ui.min.js');

echo $this->Html->script('admin/plugins/forms/ui.spinner.js');
echo $this->Html->script('admin/plugins/forms/jquery.mousewheel.js');

echo $this->Html->script('admin/plugins/charts/excanvas.min.js');
echo $this->Html->script('admin/plugins/charts/jquery.flot.js');
echo $this->Html->script('admin/plugins/charts/jquery.flot.orderBars.js');
echo $this->Html->script('admin/plugins/charts/jquery.flot.pie.js');
echo $this->Html->script('admin/plugins/charts/jquery.flot.resize.js');
echo $this->Html->script('admin/plugins/charts/jquery.sparkline.min.js');

//echo $this->Html->script('admin/charts/chart.js');
//echo $this->Html->script('admin/charts/hBar_side.js');

echo $this->Html->script('admin/plugins/tables/jquery.dataTables.js');
echo $this->Html->script('admin/plugins/tables/jquery.sortable.js');
echo $this->Html->script('admin/plugins/tables/jquery.resizable.js');

echo $this->Html->script('admin/plugins/others/jquery.fullcalendar.js');
echo $this->Html->script('admin/plugins/others/jquery.elfinder.js');


echo $this->Html->script('admin/plugins/uploader/plupload.js');
echo $this->Html->script('admin/plugins/uploader/plupload.html4.js');
echo $this->Html->script('admin/plugins/uploader/plupload.html5.js');
echo $this->Html->script('admin/plugins/uploader/jquery.plupload.queue.js');

echo $this->Html->script('admin/plugins/wizards/jquery.form.wizard.js');
echo $this->Html->script('admin/plugins/wizards/jquery.validate.js');
echo $this->Html->script('admin/plugins/wizards/jquery.form.js');

echo $this->Html->script('admin/plugins/ui/jquery.easytabs.min.js');
echo $this->Html->script('admin/files/bootstrap.js');
echo $this->Html->script('admin/files/functions.js');

echo $this->Html->script('admin/plugins/forms/autogrowtextarea.js');
echo $this->Html->script('admin/plugins/forms/jquery.uniform.js');
echo $this->Html->script('admin/plugins/forms/jquery.inputlimiter.min.js');
echo $this->Html->script('admin/plugins/forms/jquery.tagsinput.min.js');
echo $this->Html->script('admin/plugins/forms/jquery.maskedinput.min.js');
echo $this->Html->script('admin/plugins/forms/jquery.autotab.js');
echo $this->Html->script('admin/plugins/forms/jquery.chosen.min.js');
echo $this->Html->script('admin/plugins/forms/jquery.dualListBox.js');
echo $this->Html->script('admin/plugins/forms/jquery.cleditor.js');
echo $this->Html->script('admin/plugins/forms/jquery.ibutton.js');
echo $this->Html->script('admin/plugins/forms/jquery.validationEngine-en.js');
echo $this->Html->script('admin/plugins/forms/jquery.validationEngine.js');

echo $this->Html->script('admin/plugins/ui/jquery.collapsible.min.js');
echo $this->Html->script('admin/plugins/ui/jquery.breadcrumbs.js');
echo $this->Html->script('admin/plugins/ui/jquery.tipsy.js');
echo $this->Html->script('admin/plugins/ui/jquery.progress.js');
echo $this->Html->script('admin/plugins/ui/jquery.timeentry.min.js');
echo $this->Html->script('admin/plugins/ui/jquery.colorpicker.js');
echo $this->Html->script('admin/plugins/ui/jquery.jgrowl.js');
echo $this->Html->script('admin/plugins/ui/jquery.fancybox.js');
echo $this->Html->script('admin/plugins/ui/jquery.fileTree.js');
echo $this->Html->script('admin/plugins/ui/jquery.sourcerer.js');

$this->end();
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>

<!--[if IE]> <link href="css/ie.css" rel="stylesheet" type="text/css"> <![endif]-->