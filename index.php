<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='index.php') {
	include $browser_t.'/index.html';
	echo "aqui";
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	echo "aqui2";
	}
else
	{
		include $browser_t.'/404.html';
		echo "aqui3";
	}
echo "aqui4";
?>

