<?php
/*
Plugin Name: Hello-World
Plugin URI: http://mytechwebsite.com/
Description: My hello world wordpress first plugin
Version: 1.0
Author: Balgus Santoso
Author URI: http://mytechwebsite.com
License: ***
*/

add_action("admin_menu", "addMenu");
function addMenu()
{
	add_menu_page("Sample Options", "Hello World", 4, "sample-options", "sampleMenu");
	add_submenu_page("sample-options", "Opsi 1", "Options 1", 4, "sample-options1", "options1");
}

function sampleMenu()
{
	echo "Hello World";
}

function options1()
{
	echo "Mantap cuyy";
}
?>