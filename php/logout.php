<?php
require 'login.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.html");
?>
