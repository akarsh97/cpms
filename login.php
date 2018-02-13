<!DOCTYPE html>
<html lang="en">
 <head>
 <style>
 #new{
	 height:"50px";
	 width:"80px";
	 background-color:#CE1010;
	 color:white;
	 float:right;
	 margin:50px;
 }
 </style>
 <link rel="stylesheet" type="text/css" href="faculty.css">
 <title>
 Patient Management System
 </title>
 </head>
<body>

<h2 align="center">Patient Management System</h2>
<h4 align="center">Doctors only</h4>
<form action="process.php" method="POST">
  <div class="imgcontainer">
    <a href="cpmsfront.php"><img src="logo.jpg" alt="Avatar" class="avatar" height="400px" width="400px"></a>
  </div>

  <div class="container">
    <label><b>User ID</b></label>
    <input type="text" placeholder="Enter your UserId" id="user" name="user" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="pass" name="pass" required><br>
    <button type="submit" id="btn">Login</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>
<a href="newuser.php"><button>New User</button></a>
</body>
</html>