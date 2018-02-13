<html>
<head>
</head>
<body>

<?php

	mysql_connect("localhost","root","");
	mysql_select_db("login");
	$docname = $_POST['uname'];
	$docpass = $_POST['pass'];
	$result = mysql_query("insert into facutylogin values('$docname','$docpass')");
	if($result)
	{
		header("Location: http://localhost:8012/login/faculty.php");
	}
         else
        echo"User not created";
?>
</body>
</html>