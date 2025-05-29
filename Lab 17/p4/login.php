<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['email'] = $_POST['email'];
        header("home.php")
    }

    ?>
</body>
</html>