<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);

header("location:index.php?logout=true");
?>
