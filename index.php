<?php

include ("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPM Login</title>
    <!--<link rel="stylesheet" href="css/style2.css"/>-->
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

           <!-- Insert logo here  <IMG SRC=""> -->

        </div>
    </nav>
</header>

<main>

    <?php

    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'] ?>

        <h1>Successfully logged in.</h1>

    <?php }else{ ?>

        <div class="login">

            <div id="form">

                <form name="form1" method="post" action="validate.php">
                    <label>Username:</label><input type="text" name="username" class="box1"/><br/>
                    <label>Password:</label><input type="password" name="password" class="box2"/><br/>
                    <input type="submit" value="Log In"/><br/>
                </form>

            </div>

            <div id="New User">
                <h1>Don't have an account?</h1>
                <a href="New_User.php">Register an account here!</a>
            </div>
        </div>

    <?php } ?>


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