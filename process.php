<?php
//values pass from login page
		$username = $_POST['user'];
		$password = $_POST['pass'];
//prevent sql injection
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
//connect to server and select database
		mysql_connect("localhost","root","");
		mysql_select_db("login");
//query the database for user
		$result = mysql_query("select * from users where user = '$username' and pass = '$password'")
			or die("failed to query database".mysql_error());
		$row = mysql_fetch_array($result);
			if ($row['user'] == $username && $row['pass'] == $password )
				{
				header("Location: http://localhost:8012/login/formd.php");
				}
			else
			{
				echo "failed to login";
			}
			?>