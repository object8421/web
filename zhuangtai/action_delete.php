<?php
	require_once('include.php');
	session_start();
	$delete_action = $_POST['delete_action'];
	$valid_name = $_SESSION['valid_name'];

	html_header('Delete Action');
	check_valid_user();
	try {
		
			if (!$_POST) {
		# code..
				throw new Exception('You have not chose any.');
				
	} else {
		# code...
		if (is_array($delete_action) && count($delete_action) > 0) {
			# code...
			foreach ($delete_action as $key => $value) {
				# code...
				if (delete_user_action($valid_name,$value)) {
					# code...
					echo "Delete ".htmlspecialchars($value)." successfully.<br />";
				}
				else
				{
					echo "Can not delete ".htmlspecialchars($value)."<br />";
				}
			}

		}
	}
	
	} catch (Exception $e) {

		html_header('Why you can\'t do that.');
		echo $e->getMessage();		
	}

	if ($array = get_user_action($_SESSION['valid_name'])) {
		# code...
		output_action($array);
	}

	show_menu();
	html_footer();























?>