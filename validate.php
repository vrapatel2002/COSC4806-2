<?php

session_start();

$validate_username = 'vratik';
$validate_password = 'password';

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if($validate_username == $username && $validate_password == $password){
  $_SESSION['authenticated'] = 1 ;
  header('Location: /index.php');
  exit;
}else{

  if(!isset($_SESSION['failed_attempt'])){
    $_SESSION['failed_attempt'] = 1;
  }else{
    $_SESSION['failed_attempt']++;
  }
}
if(!isset($_SESSION['authenticated'])||$_SESSION['authenticated']!=1){
  header('Location:/login.php');
exit;
}
?>