<?php
session_start();
unset($_SESSION["doneeusername"]);
unset($_SESSION["donee_password"]);
header("Location:index.html");
?>