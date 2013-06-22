<?php
	require_once('include.php');
	session_start();
	$old_user = $_SESSION['valid_name'];

	//store to test if they *were* logged in
	unset($_SESSION['valid_name']);
	$result_dest = session_destroy();

	//start output html
	html_header('Log out');

	if (!empty($old_user)) {
		# code...
		if ($result_dest) {
			# code...
			echo 'Logged out.<br />';
			echo "<a href=\"index.php\">login</a>";
		}
		else
		{
			echo 'Could not log you out.<br />';
		}
	}
	else
	{
		echo 'You were not lgoged in,and so have not been logged out.<br />';
		echo "<a href=\"index.php\">login</a>";
	}
	html_footer();


?>