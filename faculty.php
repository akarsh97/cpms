<!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="stylesheet" type="text/css" href="Faculty.css">
 <title>
 Patient Management System
 </title>
 </head>
<body>

<h2 align="center">Patient Management System</h2>
<h4 align="center">Faculty only</h4>
<form action="process1.php" method="POST">
  <div class="imgcontainer">
    <a href="cpmsfront.php"><img src="logo.jpg" alt="Avatar" class="avatar" height="400px" width="400px"></a>
  </div>

  <div class="container">
    <label><b>User ID</b></label>
    <input type="text" placeholder="Enter your UserId" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>
</body>
</html>