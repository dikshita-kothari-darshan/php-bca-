<?php
session_start();
if(isset($_SESSION['email'])){
    echo "<h1>this is home</h1>";
    echo "<a href='logout.php'>logout</a>"
}else{
    header("login.php")
}

?>