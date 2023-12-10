<?php
if (session_status() === PHP_SESSION_NONE)
session_start();
$user=$_SESSION['user_id'];


if(!$_SESSION['user_id'])
{
 header('location:login.php');
}
?>