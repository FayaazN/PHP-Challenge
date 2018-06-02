<?php
if (($_GET["gnaam"] =="fayaaz" && $_GET["wwoord"]=="2059934") ||
    //($_GET["gnaam"] =="tim" && $_GET["wwoord"]=="2073636") ||
    ($_GET["gnaam"] =="faaziya" && $_GET["wwoord"]=="hoi")
    )
{
    echo "Welkom ".$_GET["gnaam"]. ".";
    print( '<a href="index2.php">Ga naar Home.</a>' );

}else {
    echo "Sorry, Je bent niet welkom";

}
?>