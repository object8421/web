<?php
	require_once('include.php');

	session_start();

	//start  output html

	html_header('Add action');

	check_valid_user();
	add_action_form();

	show_menu();
	html_footer();

?>
