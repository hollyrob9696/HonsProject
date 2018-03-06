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
                <li class="sm1"><a href="index.php">Login Page</a></li>
                <li class="sm2"><a href="#"></a>Home</li>
                <li class="sm3"><a href="#"></a>My Projects</li>
                <li class="sm4"><a href="#"></a>Evaluations</li>
                <li class=""sm5"><a href="#"></a>My Stats</li>
            </ul>
        </div>

        <div class="main-logo">

   <!-- Insert logo here <IMG SRC="">-->

</div>
</nav>
</header>

<main>

    <div class="login">
        <div id="create-account1">
            <form name="form2" action='register.php' method='post' accept-charset='UTF-8'>

                <fieldset>

                    <legend>Register New User</legend>
                    <p><input type='hidden' name='submitted' id='submitted' value='1'/></p>

                    <label for='email' >Email Address*:</label>
                    <p><input type='text' name='email' id='email' maxlength="50" /></p>

                    <label for='username' >UserName*:</label>
                    <p><input type='text' name='username' id='username' maxlength="50" /></p>

                    <label for='password' >Password*:</label>
                    <p><input type='password' name='password' id='password' maxlength="50" /></p>
                    <input type='submit' name='Submit' value='Submit' />

                </fieldset>
            </form>
        </div>
    </div>

</main>

<footer>

    <p></p>

</footer>

</body>
</html>