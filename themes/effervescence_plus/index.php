<?php
// force UTF-8 Ø
if (($zenpage = getOption('zp_plugin_zenpage')) || getOption('custom_index_page') == 'gallery') {
	if ($zenpage) {
		$imagereduction = 1/2;
	} else {
		$imagereduction = 1;
	}
	require('indexpage.php');
} else {
	require('gallery.php');
}
?>