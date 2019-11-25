<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "this is username : " . $_SESSION["username"] . ".<br>";
?>
<a href="page3.php">Next Page</a>
</body>
</html>