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
    <li><a href='login.php'>Login</a></li>
</ul>

<div class="jumbotron">

    <h1 >SpotiTube</h1>
    <p class="lead">The fake version of Youtube and Spotify</p>


</div>

<div class="playlist">
    <h2>Register.</h2>
</div>


<div>
    <form action="index.php" method="post" name="login" >
        <ul>
            <li>
                <label for='Voornaam'> Voornaam </label>
                <input class='box' placeholder='verplicht' type='text' name='Voornaam'/>
            </li>

            <li>
                <label for='Achternaam'> Tussenvoegsel </label>
                <input class='box' type='text' name='Tussenvoegsel'/>
            </li>

            <li>
                <label for='achternaam'> Achternaam </label>
                <input class='box' placeholder='verplicht' type='text' name='Achternaam'/>
            </li>

            <li>

                <label for='Geslacht'> Geslacht </label>
                <div class='geslacht'>
                    <input class='radio1' type='radio' value='man' name='Geslacht'>Man
                    <input class='radio2' type='radio' value='vrouw' name='Geslacht'>Vrouw
                </div>
            </li>

            <li>
                <label for='Geboren'> Geboortedatum</label>
                <input class='box' type='date' name='Geboortedatum'>
            </li>

            <li>
                <label for='Opmerkingen'> Opmerkingen</label>
                <textarea rows='5' cols='50' name='opmerkingen' class='box'>
                </textarea>
            </li>
        </ul>
        <input type="submit" name="knop">
    </form>
</div>


</body>
</html>

<script language="JavaScript" type="text/javascript">
    var frmvalidator  = new Validator("login");
    frmvalidator.EnableFocusOnError(false);
    frmvalidator.EnableMsgsTogether();
</script>