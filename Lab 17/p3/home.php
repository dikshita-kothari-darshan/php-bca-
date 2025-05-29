<?php

if(isset($_COOKIE['email'])){
    echo "<h1>this is home</h1>";
}else{
    header("login.php")
}

?>