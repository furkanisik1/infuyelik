<?php

session_start();
if(isset($_SESSION["clientmaile"]))

{
    echo "<h3>".$_SESSION["clientmaile"]." WELCOME</h3>";
    echo "<a href='exit.php' style='color:pink; background-color: #f093fb; border:1px solid red;
    padding:5px 5px;'>EXIT</a>";
}

else
{

    echo "You are not allowed to display this page";


}


?>