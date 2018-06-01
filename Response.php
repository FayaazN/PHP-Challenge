<?php
if (($_POST["gnaam"] =="2059934" && $_POST["wwoord"]=="Fayaaz") ||
    ($_POST["gnaam"] =="2073636" && $_POST["wwoord"]=="Tim")
    )
{
    echo "Welkom ".$_POST["gnaam"]. ".";
}else {
    echo "Sorry, Je bent niet welkom";

}
?>