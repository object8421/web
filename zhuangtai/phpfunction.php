<?php
	require_once('include.php');
	function filled_out($post)
	{
		foreach ($post as $key => $value) {
			if (!isset($key) || ($value == '')) {
				return false;
			}
		}
			return true;
	}

	function valid_email($email)
	{
		if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email)) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function register($username,$email,$passwd)
	{
		//connect to database.
		$db=db_connect();

		$result = $db->query("select * from user where username='".$username."'");

		if(!result)
		{
			throw new Exception('Could not excute the query');		
		}
		if ($result -> num_rows > 0) {
			throw new Exception('The username have been register. Please try other.');
			
			# code...
		}

		//if right. insert into database.
		$result = $db->query("insert into user values 
			('".$username."',sha1('".$passwd."'),'".$email."')");

		if (!result) {
			throw new Exception('Could not insert the information into database.');			
			# code...
		}
		else
		{
			return ture;
		}	
	}

	function login($username,$password)
	{
		$db = db_connect();

		$result = $db->query("select * from user 
			where username = '".$username."' and passwd = sha1('".$password."')");
		if (!$result) {
			# code...
			throw new Exception('Could not log you in.');	
		}

		if ($result -> num_rows >0) {
			# code...
			return true;
		}
		else
		{
			throw new Exception('Could not log in.');		
		}
	}

	function check_valid_user()
	{
		if(isset($_SESSION['valid_name']))
		{
		}
		else
		{
//			html_header('');
			echo "You are not log in.<br />";
			echo "<a href=\"index.php\">Login</a>";
			html_footer();
			exit;
		}
	}

	function get_user_action($username)
	{ 
		$db=db_connect();

		$result = $db->query("select writing,title from action where username = '".$username."'");
		try {
			if (!$result) {
			# code...
			throw new Exception('Could not connect database.');

		}

		$action_array = array();
		for ($count=1; $row = $result->fetch_row(); $count++) { 
			# code...
			$action_array[$count] = $row[1];
			$action_array[++$count] = $row[0];
		//	echo $row[1];
		}
		return $action_array;
			
		} catch (Exception $e) {
			html_header();
			echo $e->getMessage();
			html_footer();
		}
		

	}

	function get_user_title($username)
	{

	}

function add_action($writing,$title)
{
	$valid_name=$_SESSION['valid_name'];
	$db=db_connect();

	$result =$db->query("insert into action values (
		'".$valid_name."','".$writing."','".$title."')");
	if (!$result) {
		# code...
		throw new Exception('Could not insert into database;');
		
	}
	return true;

}

function get_friendname($friendname)
{
	$db = db_connect();
	$result = $db->query("select username from user where username like '%".$friendname."%'");	

	if (!$result) {
		# code...
		throw new Exception('Can not excute the query.');
		
	}
	if ($result->num_rows == 0) {
		# code...
		throw new Exception('there are no user match.');
		
	}

	$friendname_array = array();
	for ($count = 1;$array = $result->fetch_row();$count++) {
		# code...
		$friendname_array[$count] = $array[0];
	}
	return $friendname_array;
}

function get_user_friend($valid_name)
{

	$db = db_connect();
	$result = $db->query("select friendname from friend where username='".$valid_name."'");

try {
	if (!$result) {
		# code...
		throw new Exception('Can\'t excute the query.');
		

	} else {
		# code...
		$friend_array = array();
		for ($count=1; $array = $result->fetch_row(); $count++) { 
			# code...
			$friend_array[$count] = $array[0];
		}
		return $friend_array;
		
	}
	
} catch (Exception $e) {
	html_header('friend');
	echo $e->getMessage();
	html_footer();

	
}
	
	

}	

function add_friend($valid_name,$add_name)
{
	//echo "$add_name";
	if ($valid_name==$add_name) {
		# code...
		echo 'You can not add yourself.';
		echo "<br />Please try again. <br />";
		return false;
	} else {
		# code...
		$db = db_connect();
		$result = $db->query("select * from friend where username = '".$valid_name."'
			and friendname='".$add_name."'");

		if (($result->num_rows) > 0) {
			# code...
			echo "He(She) is already your friend.<br /> You can not 
			add it again.<br />";
		} else {
			# code...
			$result = $db->query("insert into friend values(
				'".$valid_name."','".$add_name."')");
			if (!$result) {
				# code...
				echo "Can not add into database.<br />";
			} else {
				# code...
				return true;
			}
			
		}
		
	}
}

function delete_user_friend($valid_name,$delete_name)
{
	$db = db_connect();

	$result = $db->query("select username from friend where username='".$valid_name."' 
		and friendname='".$delete_name."'");
	if (!$result) {
		# code...
		throw new Exception ("$delete_name is not your friend.");
	} else {
		# code...
		if(!$result = $db->query("delete from friend where username='".$valid_name."'
			and friendname='".$delete_name."'"))
		{
			throw new Exception ('database error.');
		}
		return true;
	}
	
}
function delete_user_action($valid_name,$delete_action)
{
	$db = db_connect();

	$result = $db->query("select writing from action where writing='".$delete_action."'");
	if (!$result) {
		throw new Exception("there is no this action.");
		
	}
	else
	{
		if (!$result = $db->query("delete from action where writing='".$delete_action."'")) {
			throw new Exception('database error!');
		}
		return true;
	}
}









?>