<?php
	require_once('include.php');
	session_start();

	check_valid_user();

	$valid_name = $_SESSION['valid_name'];

	html_header('Friend');
	$friend_name = get_user_friend($valid_name);
	output_user_friend($friend_name);


	show_menu();
	html_footer();




?>