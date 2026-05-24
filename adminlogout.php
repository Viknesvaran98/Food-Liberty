<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["adminpassword"]);
header("Location:index.html");
?>