<?php
//values pass from login page
		$Username = $_POST['user'];
		$Password = $_POST['pass'];
//prevent sql injection
		$Username = stripcslashes($Username);
		$Password = stripcslashes($Password);
		$Username = mysql_real_escape_string($Username);
		$Password = mysql_real_escape_string($Password);
//connect to server and select database
		mysql_connect("localhost","root","");
		mysql_select_db("login");
//query the database for user
		$result = mysql_query("select * from facutylogin where user = '$Username' and pass = '$Password'")
			or die("failed to query database".mysql_error());
		$row = mysql_fetch_array($result);
			if ($row['user'] == $Username && $row['pass'] == $Password )
				{
				header("Location: http://localhost:8012/login/existingEntry.php");
				}
			else
				{
				echo "failed to login";
				}
				
?>
