<?php

	mysql_connect("localhost","root","");
	mysql_select_db("login");
	$patname = $_POST['pname'];
	$patrollno = $_POST['rno'];
	$patprob = $_POST['add'];
	$patmed = $_POST['medp'];
	$patpresby = $_POST['presb'];
    $patdate = $_POST['datea'];
	$patbranch = $_POST['branch'];
	$result = mysql_query("insert into patient values('$patname','$patrollno','$patprob','$patmed','$patpresby','$patdate','$patbranch')");
	if($result)
	{
	header("Location: http://localhost:8012/login/login.php");
	}
	else
		echo"data not inserted";
		?>