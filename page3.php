<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "the same username: " . $_SESSION["username"] . ".<br>";
?>
<a href="page2.php">go to previous page</a>
</body>
</html>