<?php

session_start();
unset($_SESSION['admin']);
unset($_SESSION['user']);
unset($_SESSION['name']);
unset($_SESSION['email']);
header('location: login.php')

?>