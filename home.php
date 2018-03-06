<?php
session_start();
if(!$_SESSION['auth'])
{
    header('location:index.php');
}
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

</header>
<nav id=SiteNavigation>
    <ul>
        <li><a href="#">Home</a></li>  <!--insert your links replace # with  URL-->
        <li><a href="#">My Projects</a></li>
        <li><a href="#">Evaluations</a></li>
        <li><a href="#">My Stats</a></li>
    </ul>
</nav>
<section id=PageContent>
    <article class="Post">
        <header>
            <h1 class="PostTitle">Welcome to UPM!</h1>
        </header>
        <div class="WelcomeMsg">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua.
            </p>
        </div>
    </article>
    <article class="Post">
        <header>
            <h1 class="PostTitle">What is Scope?</h1>
        </header>
        <div class="Scope">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua.
            </p>
        </div>
    </article>
</section>
<footer id=PageFooter>
    <a href="#">Add a project to get started!</a>
</footer>
</body>
</html>

