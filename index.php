<?php

include ("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPM Login</title>
    <link rel="stylesheet" href="css/style2.css"/>
    <style>
        div{
            padding-top: 50px;
                padding-right: 30px;
                padding-bottom: 50px;
                padding-left: 80px;
        }
    </style>
</head>
<body>

<header>
        <div class="main-logo">

           <!-- Insert logo here  <IMG SRC=""> -->

        </div>
</header>

<main>

    <?php

    #if (isset($_SESSION['username'])) {

        #$username = $_SESSION['username'] ?>

        <!--<h1>Successfully logged in.</h1> -->
        <!--eventually require a php else statement here-->

        <div class="login">

            <form action="/action_page.php">
                  <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                  <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                      </div>
                  <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <div id="New User">
                <h1>Don't have an account?</h1>
                <a href="New_User.php">Register an account here!</a>
            </div>
        </div>
     ?>


    <aside>

        <article>

        </article>

    </aside>

</main>

<footer>

    <p>blah blah blah</p>

</footer>

</body>

</html>