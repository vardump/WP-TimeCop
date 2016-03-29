<?php
require 'functions.php';


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'TimeCop', 'TimeCop', 'manage_options', 'timecophome', 'homePage', icon(), 0  );
}