<?php
function test(){
	echo "this is just test message";
}

function homePage(){
	#includeing home page
	include plugin_dir_path(__dir__)."pages/home.php";
}

function icon(){
	return str_replace("lib/", "", plugins_url( 'images/timecopSmall.png', __FILE__ ));
}

function logo(){
	return str_replace("lib/", "", plugins_url("images/logo.png",__FILE__));
}