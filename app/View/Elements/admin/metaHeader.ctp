<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php echo $this->Html->charset(); ?>
<title><?php echo $this->fetch('title'); ?></title>

<?php
echo $this->Html->meta('favicon.ico');

echo $this->fetch('meta');
echo $this->fetch('css');
//echo $this->fetch('script');

echo $this->Html->css(array(
	'admin/bootstrap/css/bootstrap.min.css',
	'admin/bootstrap/css/bootstrap-responsive.min.css',
	'admin/blue.css',
	'admin/lib/jBreadcrumbs/css/BreadCrumb.css',
	'admin/lib/qtip2/jquery.qtip.min.css',
	'admin/lib/sticky/sticky.css',
	'admin/lib/google-code-prettify/prettify.css',
	'admin/lib/sticky/sticky.css',
	'admin/splashy/splashy.css',
	'admin/lib/colorbox/colorbox.css',
	'admin/style.css',
));

?>

<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans"/>-->

<!--[if lte IE 8]>

<?php

	echo $this->Html->css(array(
'admin/ie.css',
));

echo $this->Html->script(array(
'admin/ie/html5.js',
'admin/ie/respond.min.js',
));

?>

<![endif]-->

<script>
	//* hide all elements & show preloader
	document.documentElement.className += 'js';
</script>
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  -->
