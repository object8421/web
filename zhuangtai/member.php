<?php
	require_once('include.php');

	$username=$_POST['username'];
	$password=$_POST['passwd'];

	session_start();

	if ($username && $password) {
		# code...
		try {
			login($username,$password);
			//if you are in database register the user id
			$_SESSION['valid_name'] = $username;

		} catch (Exception $e) {
			//unsuccessful login
			html_header();
			echo "You could not be logged in.";
			echo $e->getMessage();
			html_footer();
			exit;
		}
		}
		else
		{
	//		echo "not input.";
		}
		html_header('Home');
		check_valid_user();//phpfunction.php
		echo "Log in ".$_SESSION['valid_name']."";
		if ( $array = get_user_action($_SESSION['valid_name'])) {
			# code...
			output_action($array);
		}
		if ($friend_name = get_user_friend($_SESSION['valid_name'])) {
			# code...
			foreach ($friend_name as $key => $value) {
				if ($array = get_user_action($value)) {
					# code...
					echo $value;
					output_action($array);
				}
			}
		}

		show_menu();

		html_footer();





?>