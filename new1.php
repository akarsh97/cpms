<?php

	mysql_connect("localhost","root","");
	mysql_select_db("login");
	$patroll = $_POST['roll'];
	$result_string = "select * from patient where rno ='$patroll'";
	$result = mysql_query($result_string) or die(mysql_error());
	echo "Roll NO:".$patroll;
	
?>
<html>
<head>
<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}


</style>
</head>
<body>
<h1>
Problems Occured
</h1>
<div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
<thead>
<tr>
<th>Name</th>
<th>Rollno</th>
<th>Problem</th>
<th>Medicine Prescribed</th>
<th>Prescribed By</th>
<th>Date/Time</th>
<th>Branch</th>
</tr>
</thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<?php
		while($patient = mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$patient['pname']."</td>";
		echo "<td>".$patient['rno']."</td>";
		echo "<td>".$patient['add']."</td>";
		echo "<td>".$patient['medp']."</td>";
		echo "<td>".$patient['presb']."</td>";
		echo "<td>".$patient['datea']."</td>";
		echo "<td>".$patient['branch']."</td>";
		echo "</tr>";
	}
?>
</tbody>
</table>
</div>
</body>
</html>