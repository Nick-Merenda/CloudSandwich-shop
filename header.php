<?php

if (!isset($_SESSION))
  {
    session_start();
  }


  echo ' <a href="index.php">Home</a> -
  <a href="login.php">Login</a> -
  <a href="employeeLogin.php">Employee Login</a> -
  <a href="sandwich.php">Sandwich</a>';
?>