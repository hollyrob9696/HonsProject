
<?php

session_start();

include ('dbconnect.php');

if (isset($_POST['username']) and isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username' and password='$password'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $count = mysqli_num_rows($result);

    if ($count == 1){

        $_SESSION['username'] = $username;

    }else{

//3.1.3 If the login credentials doesn't match, he will be shown with an error message.

        $fmsg = "Invalid Login Credentials.";

    }

}

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Logged In</title>

    <link rel="shortcut icon" href="images/title-icon.png" type="image/png"/>

    <link rel="stylesheet" href="css/style2.css"/>

</head>

<body>



<header>

    <nav>

        <div class="nav-bar">

            <ul>

                <li class="sm1"><a href="index.php"></a></li>

                <li class="sm2"><a href="Club_Search.php"></a></li>

                <li class="sm3"><a href="Map.php"></a></li>

                <li class="sm4"><a href="Login.php"></a></li>

            </ul>

        </div>



        <div class="main-logo">

            <?php if (isset($_SESSION['username'])) {?>

                <li><a href="profile.php">Profile</a></li>

            <?php } ?>

            <IMG SRC="images/logo.png" alt="GoPortlethen logo" width="230px" height="158px">

        </div>

    </nav>

</header>



<main>



    <div id="logged-main">

        <?php

        if (isset($_SESSION['username'])) {?>

            <!-- If logged in, display this -->

            <h1>Successfully logged in.</h1>

            <a href="logout.php">Logout</a>

        <?php } else { ?>

            <!-- If not logged in, display this -->

            <h1>Invalid user name or password. Please try again.</h1>

            <a href='Login.php'>Return to login</a>

        <?php } ?>

    </div>


</main>


<footer>

    <p></p>

</footer>

</body>
</html>