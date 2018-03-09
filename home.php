<?php
session_start();
if(!$_SESSION['auth'])
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .jumbotron {
            background-color: #f4511e;
            color: #ffffff;
            padding: 100px 25px;
        }

        .bg-grey{
            background-color: #f6f6f6;
        }

        .container-fluid{
            padding: 60px 50px;
        }

        .logo {
                font-size: 200px;
        }
        @media screen and (max-width: 768px) {
                .col-sm-4 {
                        text-align: center;
                        margin: 25px 0;
                    }
        }

        .navbar {
                margin-bottom: 0;
                background-color: #f4511e;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
        }

        .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #f4511e !important;
                background-color: #fff !important;
        }

        .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
        }

    </style>

</head>

<body id="homePage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                  <a class="navbar-brand" href="#">Logo</a>
                </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">HOME</a></li>
                        <li><a href="#services">MY PROJECTS</a></li>
                        <li><a href="#portfolio">EVALUATIONS</a></li>
                        <li><a href="#pricing">MY STATS</a></li>
                        <li><a href="#contact">LOG OUT</a></li>
                      </ul>
                </div>
          </div>
</nav>

<div class="jumbotron text-center">
    <h1 id =SiteTitle> Univeristy Project Manager </h1>
    <h3>Welcome to your University Project Manager!</h3>
</div>

<div class=""container-fluid">
<h4>What is UPM?</h4>
<p>Univeristy Project Manager is a web app designed too... blah blah blah students, manage courseworks, self evaluate etc</p>
</div>

<div class="container-fluid bg-grey">
    <h4>What is Project Management?</h4>
    <p>Defination of PM.... It involes <strong>Planning</strong>, <strong>Scope</strong>, etc</p>
</div>

<div class="container-fluid text-center">
    <h4>Why is Project Managment Important?</h4>
    <p>Important for industry, dividing time, achieving the best grades possible etc etc</p>
</div>

<div class="container-fluid text-center">
      <div class="row">
            <div class="col-sm-8">
                  <h4>Why is it Important to Plan?</h4>
                  <p>blah blah blah blah .... etc etc etc</p>
                </div>
            <div class="col-sm-4">
                  <span class="glyphicon glyphicon-signal logo"></span>
                </div>
          </div>
</div>

<div class="container-fluid bg-grey text-center">
      <div class="row">
            <div class="col-sm-4">
                  <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            <div class="col-sm-8">
                  <h4>What is Scope?</h4>
                  <p>blah blah blah blah .... etc etc etc</p>
                </div>
          </div>
</div>

</body>

<!--<nav id=SiteNavigation>
    <ul>
        <li><a href="#">Home</a></li>  <!--insert your links replace # with  URL
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
</body>-->
</html>

