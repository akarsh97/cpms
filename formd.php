<html>
<head>
<title>
Chitkara Patient Management System
</title>
<style>
* {
    box-sizing: border-box;
}
button{
	background-color: #ce1010;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
input[type=text],select,textarea,date{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
input[type=submit] {
    background-color: #ce1010;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</style>
</head>
<body>
<h2 align="center"> Fill In the Details of the patient</h2>
<h2 align="right"><a href="newfaculty.php"><input type="submit" value="Create new Faculty Id" name="new" id="new"></input></a></h2>
<br>
<button>
<h3><a href="http://localhost:8012/login/existingEntry.php">Search for an existing entry</a></h3>
</button>
<div class="container">
<form action="fil1.php" method="POST">
<fieldset><legend>Info</legend>
<label>Name</label><input type="text" name="pname"><br>
<label>Roll Number</label><input type="text" name="rno" id="lname"><br>
<label>Problem</label><textarea maxlength="200" height=50px width=50px name="add"></textarea></br>
<label>Medicine Prescribed</label><input type="text" name="medp" id="branch"><br>
<label>Prescribed By</label><input type="text" name="presb"><br>
<label>Date</label><input type="date" name="datea"><br>
<label>Branch</label><input type="text" name="branch"><br>
<input type="submit" value="Submit">
</fieldset>
</form>
</div>
</body>
</html>