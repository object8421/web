<?php
	require_once('include.php');
	session_start();

	$add_name = $_POST['add'];
	$valid_name = $_SESSION['valid_name'];

	html_header('Add friend');
	check_valid_user();
	

	if (!filled_out($_POST)) {
		# code...
		echo "<p>You have not chosen any user to add.<br />
		Please tyr again.</p>";
		show_menu();
		html_footer();
		exit;
	} else {
		//echo "$add_name[0]";
			if (add_friend($valid_name,$add_name[0])) {
				# code...
				$cout = count($add_name);
	//			echo "$cout";
			//	echo 'Add:'.htmlspecialchars($add_name[0]).'  successful.<br />';
				echo 'Add:'.$add_name[0].'  successful.<br />';
			} else {
				# code...
				echo "Could not add ".htmlspecialchars($add_name[0]).".<br />";
			}
			
		}
		
	
	if ($friend_name = get_user_friend($valid_name)) {
		# code...
		output_user_friend($friend_name);
	}

	show_menu();
	html_footer();




?>
