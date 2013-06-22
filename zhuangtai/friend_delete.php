<?php
	require_once('include.php');
	session_start();
	$delete_name = $_POST['delete_name'];
	$valid_name = $_SESSION['valid_name'];

	html_header('Delete Friend');
	check_valid_user();
	try {
		
			if (!$_POST) {
		# code..
				throw new Exception('You have not chose any friend.');
				
	} else {
		# code...
		if (is_array($delete_name) && count($delete_name) > 0) {
			# code...
			foreach ($delete_name as $key => $value) {
				# code...
				if (delete_user_friend($valid_name,$value)) {
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

	if ($friend_name = get_user_friend($valid_name)) {
		# code...
		output_user_friend($friend_name);
	}

	show_menu();
	html_footer();























?>