<?php
session_start();
if(!$_SESSION['auth'])
{
    header('location:index.php');
}
?>

<h1>Welcome!</h1>
