    <?php
    if(isset($_POST['sub'])){
        $pa_email = "/^[a-zA-Z0-9_%+.]+@[a-z0-9-.]+\.[a-z]{2,}$/";
        $pa_pass = "/^.{6,}$/";
        $e = $_POST['email'];
        $p = $_POST['password'];
        $error = [];
        if(!preg_match($pa_email,$e)){
            $error[] = "invalid email";
        }
        if(!preg_match($pa_pass,$p)){
            $error[] = "invalid password";
        }
        if(empty($error)){
            ssessio_start();
            $_SESSION['email'] = $email;
            header("home.php");
        }

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">
        <input type="email" name="email" id="">
        <input type="password" name="password" id=""><?php if(isset($error[0])) echo $error[0]; ?>
        <input type="submit" value="login" name="sub"> <?php if(isset($error[1])) echo $error[1]; ?>
    </form>

</body>
</html>