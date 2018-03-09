
<?php

$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "b9c92a9c81258c";
$password = "aae783b2";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>


