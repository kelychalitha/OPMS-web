<?php
session_start();
unset($_SESSION["token"]);
unset($_SESSION["token1"]);
header("Location:../../index.html");
?>
