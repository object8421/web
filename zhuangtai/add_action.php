<?php
require_once('include.php');

session_start();

$title = $_POST['title'];
$writing=$_POST['writing'];

html_header('Add action');
try {
	check_valid_user();
	if (!filled_out($_POST)) {
		# code...
		throw new Exception('You haven\'t fill the blank any. please try again.');
		
	}
	add_action($writing,$title);
	echo 'writing is added.';

	//get the writing this user has saved.
	if ($array = get_user_action($_SESSION['valid_name'])) {
		# code...
		output_action($array);
	}

	
} catch (Exception $e) {
	echo $e->getMessage();
	
}
show_menu();
html_footer();





?>
