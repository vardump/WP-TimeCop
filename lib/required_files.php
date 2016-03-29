<?php
require 'functions.php';


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	#main menu
	add_menu_page( 'TimeCop', 'TimeCop', 'manage_options', 'timecophome', 'homePage', icon(), 0  );

	#submenus
	add_submenu_page("timecophome", "Add new project", "Add new Project", 0, "addnewproject", "addNewProjectPage");
	add_submenu_page("timecophome", "Add new Worker", "Add new Worker", 1, "addnewworker", "addNewWorkerPage");
	add_submenu_page("timecophome", "Add new Team", "Add new Team", 2, "addnewteam", "addNewTeamPage");
	add_submenu_page("timecophome", "Assign Project", "Assign project", 3, "assignproject", "assignProjectPage");
	add_submenu_page("timecophome", "Work diary", "Work diary", 4, "workdiary", "workDiaryPage");
	add_submenu_page("timecophome", "Reports", "Reports", 5, "timecopreports", "reportsPage");
}