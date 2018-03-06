<?php

session_start();
include("dbconnect.php");

if (isset($_POST['email']) and isset($_POST['username']) and isset($_POST['password'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql1 = "SELECT * FROM users WHERE username = '$username'";
    $sql2 = "SELECT * FROM users WHERE email = '$email'";
    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

    ?>
<!DOCTYPE html>
<html>
<head>

    <!--<LINK href="mystyle.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <title>UPM</title>
</head>

<body>


<header id=PageHeader>
    <h1 id =SiteTitle> Univeristy Project Manager </h1>
    <!--Insert logo here -->
    <!--<img id ="Logo" src="blog.jpg" alt="blog logo" />-->

<nav id=SiteNavigation>
    <ul>
        <li><a href="#">Home</a></li>  <!--insert your links replace # with  URL-->
        <li><a href="#">My Projects</a></li>
        <li><a href="#">Evaluations</a></li>
        <li><a href="#">My Stats</a></li>
    </ul>
</nav>
</header>
<main>

    <div class="login">

        <!-- PHP CODE TO SEE IF USER HAS BEEN CREATED -->

        <?php

        $result1 = mysqli_query($link, $sql1) or die(mysqli_error($link));
        $count1 = mysqli_num_rows($result1);


        if ($count1 == 0) {

            $result2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
            $count2 = mysqli_num_rows($result2);


            if ($count2 == 0) {

                $result3 = mysqli_query($link, $query) or die(mysqli_error($link));

                $last_id = mysqli_insert_id($link);

                echo "</p>New Account Created. Your user ID is " . $last_id . "</p>"; ?>

                <!-- If user account has been created, do this.. -->

                <div id="form">

                    <form name="form" method="post" action="validate.php">

                        <label>Username:</label><input type="text" name="username" class="box1"/><br/>
                        <label>Password:</label><input type="password" name="password" class="box2"/><br/>
                        <input type="submit" value="Log In"/><br/>

                    </form>

                </div>

                <!-- PHP ELSE -->

                <?php

            } else { ?>

                <!-- If no user account has been created, do this.. -->

                <div id="form">

                    <h1>Could not create account. The email used may already be taken or you may have created an account under
                        the email address you used. <a href="Create_Acc.php">Click here</a> to try again.</h1>

                </div>

                <?php

            }

            mysqli_close($link);

        }

        else { ?>

            <!-- If no user account has been created, do this.. -->

            <div id="form">

                <h1>Could not create account. The username used may already be taken or you may have created an account under
                    the email address you used. <a href="Create_Acc.php">Click here</a> to try again.</h1>
            </div>

            <?php
        }

        mysqli_close($link);

        }?>

    </div>
</main>
<footer>

    <p></p>

</footer>
</body>
</html>