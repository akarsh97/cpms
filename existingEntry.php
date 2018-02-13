<html>
<head>
<style>
* {
    box-sizing: border-box;
}

input[type=text]{
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
input[type=submit] {
    background-color: #ce1010;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	margin-right:95%;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<h2>Enter Patient's roll number</h2>
<div class="container">
<form action="http://localhost:8012/login/new1.php" method="POST">
<input type="text" name="roll">
<input type="submit" name="submit">
</form>
</body>
</html>