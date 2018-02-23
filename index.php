<?php
if($_POST)
{
    $host = "localhost";
    $user = "root";
    $pass="";
    $db="auth";

    $username=$POST['username'];
    $password=$POST['password'];

$conn=mysqli_connect($host, $user, $pass, $db);
$query="SELECT * from honsdb where username=$username and password='$passowrd'";

$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['auth']='true';
    header('location:home.php');
}
else {echo 'Wrong username or password';}
}
?>

<h1>UPM</h1>

<h2>Uni Project Manager</h2>

<form method="POST">
    username:<br>
    <input type="text" name="username"><br>
password:<br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="login">
</form>