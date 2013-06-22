<?php
function html_footer()
{
	?>
</body>
</html>
	<?php
}
function html_header($title)
{
	?>
	<html>
	<head>
		<title><?php echo $title;?></title>
		<style>
		body {
			font-family: Arial,Helvetica,sans-serif; font-size: 13px
		}
		li,td {
			font-family: Arial,Helvetica,sans-serif;font-size:  13px
		}
		hr {
			color: #3333cc;width: 300;text-align=left:
		}
		a {
			color: #000000
		}
		</style>
	</head>
	<body>
		<h1>WIN</h1>
	<?php
	if($title)
	{
		?>
		<h2><?php echo $title; ?></h2>
		<hr align="left" width="600">
		<?php
	}
}

function output_note()
{
	?>
	<html>
	<table>
		<td>this is my first web site.</td>
		<td>So you can see many shortages.</td>
	</table>
	</html>
	<?php
}

function output_login()
{
	/*
	?>

	<p><a href="register_form.php">Not a member?</a></p>
	<form action="member.php" method="post">
	<table bgcolor="#cccccc">
		<tr>
			<td colspan = "2">Member Log in here:</td>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type = "text" name="username" size="16" maxlength="16"/></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="passwd" size="16" maxlength="40"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Log in"></td>

		</tr>
		<tr>
			<td colspan ="2"><a href="forgetpassword_form.php"></a></td>
		</tr>
	</table>
	</form>
	<?php
	*/
	?>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>WIN</title>

	<link rel="stylesheet" href="css/login-form.css" media="screen">

	<style>body{background:url(img/bg.png) center;margin: 0 auto;width: 960px;padding-top: 50px}.footer{margin-top:50px;text-align:center;color:#666;font:bold 14px Arial}.footer a{color:#999;text-decoration:none}.login-form{margin: 50px auto;}</style>
<meta name="robots" content="noindex,follow" />
</head>

<body>

<img src="img/title.png" alt="title">

<div class="login-form">

	<h1>Login Form</h1>

	<form action="member.php" method="post">
		<tr>
		<input type="text" name="username" placeholder="username">
		</tr>
		<tr>
		<input type="password" name="passwd" placeholder="password">
		</tr>
		<tr>
		<span>
			<a href="register_form.php">Not a Member?</a>
			<!--
			<input type="checkbox" name="checkbox">
			<label for="checkbox">remember</label>
		-->
		</span>
	</tr>

		
		<input type="submit" value="log in">

	</form>

</div>
<!--
<div class="footer"><p>By <a href="http://vtimbuc.net/">Valeriu Timbuc</a> for <a href="http://designmodo.com">DesignModo</a>.</p></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/login-form.js"></script>
  -->

	<?php
}

function output_register_form()
{
	?>
	<!--
	<p>Enter your information:</p>
	<form action="register.php" method="post">
		<table bgcolor="#cccccc">
			<tr>
				<td>Email address:</td>
				<td><input type="text" name="email" size="30" manlength="100"/></td>
			</tr>
			<tr>
				<td>Preferred username:</td>
				<td><input type="text" name="username" size="16" maxlength="16"/></td>
			</tr>
			<tr>
				<td>Password <br />(between 6 and 16 cahrs):</td>
				<td><input type="password" name="passwd" size="16" maxlength="16"/></td>
			</tr>
			<tr>
				<td>Confirm password:</td>
				<td><input type="password" name="passwd2" size="16" maxlength="16" /></td>
			</tr>
			<tr>
				<td colspan=2 align="center">
					<input type="submit" value="Register" /></td>
			</tr>
		</table>
	</form>
--> 

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>WIN</title>

	<link rel="stylesheet" href="css/register-form.css" media="screen">

	<style>body{background:url(img/bg.png) center;margin: 0 auto;width: 960px;padding-top: 50px}.footer{margin-top:50px;text-align:center;color:#666;font:bold 14px Arial}.footer a{color:#999;text-decoration:none}.login-form{margin: 50px auto;}</style>
<meta name="robots" content="noindex,follow" />
</head>

<body>

<img src="img/title.png" alt="title">

<div class="register-form">

	<h1>Register Form</h1>

	<form action="register.php" method="post">
		<tr>
			<input type="text" name="email" placeholder="e-mail">
		</tr>
		<tr>
		<input type="text" name="username" placeholder="username">
		</tr>
		<tr>
		<input type="password" name="passwd" placeholder="password">
		</tr>
		<tr>
		<input type="password" name="passwd2" placeholder="password-again">
	</tr>
<!--		<span>
			<input type="checkbox" name="checkbox">
			<label for="checkbox">remember</label>
		</span>
	</tr>
-->
		
		<input type="submit" value="Register">

	</form>

</div>
	<?php
}

function output_action($array)
{
	/*
	?>

<form name="delete_action_table" action="action_delete.php" method="post">
<table width="300" cellpadding="2" cellspacing="2">

	<?php
	
	$color="#cccccc";
//	echo "<tr bgcolor=\"".$color."\"><td></td></tr>";
	if ((is_array($array)) && (count($array))) {
		# code...
		foreach ($array as $key => $value) {
			# code...
					echo "<tr bgcolor=\"".$color."\"><td>".$value."<td>
					<td><input type=\"checkbox\" name=\"delete_name[]\"
					 value=\"".$value."\" /></td>
					</tr>";
		}
	}
	else
	{
		echo "<tr><td>There is no wirtting.</td></tr>";
	}

	?>
			<?php
			
		global $action_table;
			$action_table = true;

			if ($action_table == true) {
				# code...
				echo "<a href=\"#\" onClick=\"delete_action_table.submit();\">Delete</a>";
			} else {
				# code...
				echo "<span style=\"color:#cccccc\">Delete</span> &nbsp|&nbsp";
			}			
		?>
	</form>

	<?php
	
	*/
?>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content-type="text/html" charset="utf-8/GB2312" />
	<link rel="stylesheet" type="text/css" href="css/action_style.css" />
	<!--
	<style>body{background:url(img/bg.png) center;margin: 0 auto;width: 960px;padding-top: 50px}.footer{margin-top:50px;text-align:center;color:#666;font:bold 14px Arial}.footer a{color:#999;text-decoration:none}.login-form{margin: 50px auto;}</style>
-->
</head>
<body id="home" aling="center">
<!--
	<h1>Pure CSS(3) accordion<small>&mdash;view in Webkit for best experience</small></h1>
-->
	<!--
	<p>By <a href="http://twitter.com/csswizardry">Harry Roberts</a> at <a href="http://twitter.com/VenturelabUK">@VenturelabUK</a>. <a href="http://www.venturelab.co.uk/devblog/2011/01/pure-css3-accordion/">Return to article</a>.More script and css style
: <a href="http://www.htmldrive.net/" title="HTML DRIVE - Free DHMTL Scripts,Jquery plugins,Javascript,CSS,CSS3,Html5 Library">www.htmldrive.net </a></p>
-->
<?php
	echo "<ul align=\"center\" class=\"accordion\" id=\"vertical\">";
	$confirm = true;
		if ((is_array($array)) && (count($array))) {
			foreach ($array as $key => $value) {

	/*	<!--	
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lobortis massa. Nunc viverra velit leo, 
					sit amet elementum mi. Fusce posuere nunc a mi tempus malesuada. Curabitur facilisis rhoncus eros eget placerat.
					 Aliquam semper mauris sit amet justo tempor nec lacinia magna molestie. Etiam placerat congue dolor vitae adipiscing.
					  Aliquam ac erat lorem, ut iaculis justo. Etiam mattis dignissim gravida. Aliquam nec justo ante, non semper mi. Null
					  a consectetur interdum massa, vel porta enim vulputate sed. Maecenas elit quam, egestas eget placerat non, fringilla
					   vel eros. Nam vehicula elementum nulla sed consequat. Phasellus eu erat enim. Praesent at magna non massa dapibus 
					   scelerisque in eu lorem.</p>
					-->
				*/	
			
			if ($confirm == true) {
				echo "<li class=\"slide-01\">			
				<div align=\"left\">
				<h2>".$value."</h2>";
				$confirm = false;
			}
			else
				if ($confirm == false) {
				echo "<p>".$value."</p>
				</div>			
				</li>";
				$confirm = true;
				}
			
			}
		}

	/*
<!--	
	<p>By <a href="http://twitter.com/csswizardry">Harry Roberts</a> at <a href="http://twitter.com/VenturelabUK">@VenturelabUK</a>. <a href="http://www.venturelab.co.uk/devblog/2011/01/pure-css3-accordion/">Return to article</a>.</p>
-->
*/
	else
		{
			echo "<tr><td>There is no wirtting.</td></tr>";
		}
		echo "</ul>
		</body>
		</html>";
}

function show_menu()
{
	?>
<!--
	<table align="center" width="200" cellpading="3"  cellapcing="2">
		<hr align="center" width="600">
		<tr>
			<td><a href="member.php">Home</a></td>
			<td><a href="add_action_form.php">Add action</a></td>
			<td><a href="logout.php">Logout</a></td>
		</tr>
		<tr>
			<tr>
				<td><a href="friend_select.php">Add friend</a></td>
				<td><a href="friend.php">friend</a></td>
			</tr>
		</tr>
		
	</table>
	<hr align="center" width="600">
-->
<head>
<meta charset="UTF-8/GB2312">

<link rel="stylesheet" href="./style.css" type="text/css" />

<!--[if lt IE 9]>
   <style>
      .primary-menu li span {
         display:none;
         background:#ffffff !important;
      }
      .primary-menu li a:hover ~ span {
         display:block;
      }
   </style>
<![endif]-->
<!--
<title>Fancy Social Menu with HTML5 and CSS3 only!</title>
-->
<html>
</head>
<body >
<div  id="content">
<!--
	<h1 style="padding:20px 0 0; text-align:center; color:#ffffff; font-size:30px;">Fancy Social Menu with HTML5 and CSS3 (no images)!</h1>
-->
	<!-- change this div to a nav tag if you're not planning on supporting IE users -->
	<div  class="menu">
		<ul class="primary-menu">
			<li class="facebook"><a class="social-item" href="member.php">a</h><span class="social-span">Home</span></li>
			<li class="twitter"><a class="social-item" href="add_action_form.php">c</a><span class="social-span">Add-Action</span></li>
			<li class="flickr"><a class="social-item" href="logout.php">t</a><span class="social-span">Log-Out</span></li>
			<li class="rss"><a class="social-item" href="#">a</a><span class="social-span">Information</span></li>
			<li class="rss"><a class="social-item" href="friend_select.php">q</a><span class="social-span">Friend-Select</span></li>
			<li class="mail"><a class="social-item" href="friend.php">v</a><span class="social-span">Friend</span></li>
			<li class="mail"><a class="social-item" href="#">k</a><span class="social-span">E-maillist</span></li>
		</ul>
	</div>
	<!-- change this div to a nav tag if you're not planning on supporting IE users -->
<!--	
	<p class="credits" style="padding:60px 0 20px; text-align:center; font-size:20px;">Read the tutorial <a href="http://dirtekdesigns.com/tutorial/fancy-social-menu-with-html5-and-css3" target="_blank">here</a> or visit <a href="http://dirtekdesigns.com" target="_blank">DirTek Designs</a>.</p>

More script and css style
: <a href="http://www.aspxcs.net/" title="HTML DRIVE - Free DHMTL Scripts,Jquery plugins,Javascript,CSS,CSS3,Html5 Library">www.aspxcs.net </a>	
-->
</div>
    
	<!--[if lt IE 9]>
		<p class="ie-warning" style="text-align:center; line-height:30px;">
		<span style="font-size:20px;">Warning</span><br />
		It appears that you are using an out-of-date browser.<br />
		To join the rest of the civilized world, please download one of the following browsers:<br />
		<a href="http://www.mozilla.org/en-US/firefox/new" target="_blank">Mozilla Firefox</a> |
		<a href="http://www.google.com/chrome" target="_blank">Google Chrome</a> |
		<a href="http://www.opera.com/" target="_blank">Opera</a>
	<![endif]-->
<br />
</body>
</html>



	<?php

}

function add_action_form()
{
	?>

	<form action="add_action.php" method="post">
		<table cellpading="2" cellspacing="2">
			<tr>
				<td><p>Your title: </p></td>
			</tr>
			<tr>
				<td><input type="text" name="title" maxlength="255"
					length="20" /></td>
		</tr>
		<tr>
			<td><textarea name="writing" cols="100" rows="10"></textarea></td>
		</tr>
			<tr>
				<td><input width="30px" height="20px" type="submit" value="publish" /></td>
			</tr>
		</table>
	</form>

	<?php

}

function select_friend()
{
	?>
	<form action="select_result_friend.php" method="post" >
		<table>
			<tr>
				<td><input type="text" name="friendname" size="20" length="16" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="select" /></td>
			</tr>
			
		</table>
	</form>	


	<?php
}


function output_friendname($array)
{
	?>
<!--
	<form name="friend_table" action="friend_add.php" method="post">
		<table width="300" cellpading="2" cellspacing="2">
-->			
			<?php
			/*
			$color = "#cccccc";
			echo "<tr bgcolor=\"".$color."\"><td><strong>friendname</strong></td>";
			echo "<td><strong>Add?</strong></td></tr>";
			if ((is_array($array)) && (count($array) > 0)) {
				# code...
				foreach ($array as $key => $value) {
					# code...
					if ($color == "#cccccc") {
						# code...
						$color = "#ffffff";
					} else {
						# code...
						$color = "#cccccc";
					}
		//			echo "$array -";
					//remember to call htmlspacialchars() when are displaying user data.
					echo "<tr bgcolor=\"".$color."\"><td>".$value."</td>
					<td><input type=\"radio\" name=\"add[]\" 
					value=\"".$value."\" /></td>
					</tr>";
					
				}
			}
			else
			{
				echo "<tr><td>No person on record.</td></tr>";
			}
			global $friend_table;
			$friend_table = true;
			if ($friend_table==true) {
				# code...
				echo "<p><a href=\"#\" onClick=\"friend_table.submit();\">Add</a></p>";
			}
			else
			{
				echo "<span style=\"color: #cccccc\">Add</span> &nbsp:|&nbsp;";
			}
			*/
			?>
			<!--
		</table>
	</form>

-->
<html xml:lang="en" lang="en">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>WIN-Friend</title>
		<link rel="stylesheet" type="text/css" media="screen, projection" href="friend.css" />		
</head>


<body>
	<p class="title">Select-Result</p>
	<form name="friend_table" action="friend_add.php" method="post">
	<table align="center">
	<?php
			if ((is_array($array)) && (count($array) > 0)) {
	?>		
			<tr>
			<th class="col-name">Add?</th>
			<th class="col-name">Name</th>
<!--
			<th class="col-comment">Comment</th>
			<th class="col-response">In Response To</th>
	-->	
			</tr>
			<?php
				foreach ($array as $key => $value) {
		//			echo "$array -";
		//remember to call htmlspacialchars() when are displaying user data.
		/*			echo "<tr bgcolor=\"".$color."\"><td>".$value."</td>
					<td><input type=\"radio\" name=\"add[]\" 
					value=\"".$value."\" /></td>
					</tr>";
		*/
					echo "<tr>
					<td><input type=\"radio\" name=\"add[]\" /></td>
					<td class=\"col-name\">
						<strong>".$value."</strong><br/>
						Friend-info<br/>
						time<br/>
					</td>
					
			<!--		<td class=\"col-comment\">
						<em>Submitted on 2010/02/22 at 10:25pm</em><br/>
						bisa gw terapin untuk map yang gw buat gak ya, tapi harus ada parameternya untuk generate mapnya.. hiks..
					</td>
					<td class=\"col-response\">
					TinyTips : Another jQuery Plugin for Tooltip
					</td>
			-->
					</tr>
					";
					
				}
			}
			else
			{
				echo "<tr><td>No person on record.</td></tr>";
			}
			global $friend_table;
			$friend_table = true;
			if ($friend_table==true) {
				# code...
				echo "<p><a href=\"#\" onClick=\"friend_table.submit();\">Add</a></p>";
			}
			else
			{
				echo "<span style=\"color: #cccccc\">Add</span> &nbsp:|&nbsp;";
			}
			?>

	</table>
</form>


	<?php

}

function output_user_friend($friend_name)
{
	?> 
	<form name="friend_name_table" action="friend_delete.php" method="post">
		<table width="300" cellpading="2" cellspacing="0">
			<tr bgcolor="#cccccc">
				<td><strong>Friend Name</strong></td>
			</tr>
			<?php
			$color="#cccccc";
			if (is_array($friend_name) && (count($friend_name)) > 0) {
				# code...
				foreach ($friend_name as $key => $value) {
					# code...
					if ($color == "#cccccc") {
						# code...
						$color = "#ffffff";
					} else {
						# code...
						$color = "#cccccc";
					}
					echo "<tr bgcolor=\"".$color."\"><td>".$value."<td>
					<td><input type=\"checkbox\" name=\"delete_name[]\"
					 value=\"".$value."\" /></td>
					</tr>";
					
				}
			}
			else
			{
				echo "You don't have any friend.";	
			}

			?>
		</table>
		<?php
		global $friend_name_table;
			$friend_name_table = true;

			if ($friend_name_table == true) {
				# code...
				echo "<a href=\"#\" onClick=\"friend_name_table.submit();\">Delete</a>";
			} else {
				# code...
				echo "<span style=\"color:#cccccc\">Delete</span> &nbsp|&nbsp";
			}
			
		?>
	</form>	
	<?php

}












?>