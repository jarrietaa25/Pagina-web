<?php
session_start();
$_SESSION = [];
session_destroy();
header("Location: from_login.php");
exit;
?>
