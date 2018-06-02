<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    

</head>

<body>
<ul class='nav'>
    <li><a>SpotiTube</a></li>
    <li><a href='index.php'>Home</a></li>
    <li><a href='#'>Make your own playlist !</a></li>
    <li><a href='Login.html'>Login</a></li>
    <form action="index2.php" method="post" class="loginform">
        Voornaam: <input type="text" name="gnaam">
        Wachtwoord: <input type="password" name="wwoord">
        <input type="submit" name="knop">
    </form>
</ul>

<div class="jumbotron">

    <h1 >SpotiTube</h1>
    <p class="lead">The fake version of Youtube and Spotify</p>
    <?php
    login();
    ?>

</div>

<div class="row">
    <div class="column">
        <a href="Ashafar.html"><img class="ShowcaseImage" src="ashafar.jpg"></a>


    </div>

    <div class="column">
        <a href="Bbe.html"> <img class="ShowcaseImage" src="Esko.jpg"></a>
    </div>

    <div class="column">
        <a href="Lijpe.html"><img class="ShowcaseImage" src="Lijpe.png"></a>
    </div>

</div>

</body>
</html>


<?php
function login()
{
    if (($_POST["gnaam"] == "fayaaz" && $_POST["wwoord"] == "2059934") ||
        ($_POST["gnaam"] == "tim" && $_POST["wwoord"] == "2073636"))
        echo "Welkom, " . $_POST["gnaam"];
    else {
        echo "<script type='text/javascript'>alert('Dit is geen bekend account, maak er een aan !');</script>";
    }
}
?>