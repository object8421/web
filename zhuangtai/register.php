<?php
	require_once('include.php');
	session_start();
	$username=$_POST['username'];
	$passwd=$_POST['passwd'];
	$passwd2=$_POST['passwd2'];
	$email = $_POST['email'];

	//start session which may be needed later
	//start  it now because it must go before headers
	try {
		//check forms filled in
		if (filled_out($_POST) ==  false) {//phpfunction.php
			throw new Exception('You have not filled the form correctly - please filled it again.');		
		}

		if (valid_email($email) == false) {//phpfunction.php
			throw new Exception('The email is not a valid email address. Please filled it again.');
		}

		if ($passwd != $passwd2)
		{
			throw new Exception('The two password is not equal.');
		}

		if ((strlen($passwd) <6 ) || (strlen($passwd) >16)) {
			throw new Exception('Your password must be between 6 and 16 characters.');
		}
	

	register($username, $email, $passwd);
	//attemp to register
	//if error throw an exception.

	$_SESSION['valid_name'] = $username;
	//session register
	html_header("Register_successful");
	echo 'Your registion was successful. GO to the member page to start!';
	show_menu();
	html_footer();
	}
	catch(Exception $e)
	{
		html_header('error');
		echo $e->getMessage();
		html_footer();
		exit;
	}





?>