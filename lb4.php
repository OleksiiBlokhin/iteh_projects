<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method='POST'>
    <h2>Please enter your username :</h2>
    <input type="text" name="name">
    <input type="submit" value="Submit Name">
    <a href="page2.php">Page 2</a>
</form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
$_SESSION["username"] = $name;
echo "<h3> Hello $name </h3>";
?>
<?php
// Echo session variables that were set on previous page
//echo "THIS IS USERNAME :" . $_SESSION["username"] . ".<br>";
?>
</body>
</html>