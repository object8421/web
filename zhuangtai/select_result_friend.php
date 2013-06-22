<?php
	require_once('include.php');

	session_start();
	$friendname = $_POST['friendname'];

	check_valid_user();

	try {
	//		html_header('The result');
		if (!filled_out($_POST)) {
			# code...
			throw new Exception('You don\'t fill any name in the blank.');
			
		}
		if ($array = get_friendname($friendname)) {
			# code...
//			echo "$array";
			output_friendname($array);
		}


		
	} catch (Exception $e) {
		echo $e->getMessage();
		
	}

	show_menu();
	html_footer();







?>