<?php

echo $this->Html->css(array(
	'admin/ie.css',
));
echo $this->Html->script(array(
	'admin/jquery.min.js',
	'admin/jquery.debouncedresize.min.js',
	'admin/jquery.actual.min.js',
	'admin/jquery.cookie.min.js',
	'admin/bootstrap/bootstrap.min.js',
	'admin/lib/qtip2/jquery.qtip.min.js',
	'admin/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js',
	'admin/lib/sticky/sticky.min.js',
	'admin/ios-orientationchange-fix.js',
	'admin/lib/antiscroll/antiscroll.js',
	'admin/lib/antiscroll/jquery-mousewheel.js',
	'admin/lib/colorbox/jquery.colorbox.min.js',
	'admin/lib/datatables/jquery.dataTables.min.js',
	'admin/lib/datatables/extras/Scroller/media/js/Scroller.min.js',
	'admin/gebo_datatables.js',
	'admin/gebo_common.js',
//		'admin/',
));

?>


<script>
	$(document).ready(function () {
		//* show all elements & remove preloader
		setTimeout('$("html").removeClass("js")', 1000);
	});
</script>




