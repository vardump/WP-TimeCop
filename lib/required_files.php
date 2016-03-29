<?php
require 'functions.php';


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	#main menu
	add_menu_page( 'TimeCop', 'TimeCop', 'manage_options', 'timecophome', 'homePage', icon(), 0  );

	#submenus
	add_submenu_page("timecophome", "Add new project", "Add new Project", 0, "addnewproject", "addNewProjectPage");
	add_submenu_page("timecophome", "Add new Worker", "Add new Worker", 1, "addnewworker", "addNewWorkerPage");
}