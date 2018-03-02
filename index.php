<?php
include("dbconnect.php");

$sql = "SELECT * from Users";
$result = $db->query($sql);
while($row = $result->fetch_array()){
    echo "<p>'' .$row['username']. ''</p>";
    
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
    <input type="submit">
</form>