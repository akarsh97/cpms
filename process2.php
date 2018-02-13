<?php

	mysql_connect("localhost","root","");
	mysql_select_db("login");
	$docname = $_POST['uname'];
	$docpass = $_POST['pass'];
	$result = mysql_query("insert into users values('$docname','$docpass')");
	if($result){
		echo "<script>alert('Doctor user created successfully');</script>"   //Echo not working 
		header("Location: http://localhost:8012/login/login.php");
	}
		 else
        echo"doctor user not created";
	?>
