<?php

//  CREATE TABLE users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     email VARCHAR(100) NOT NULL UNIQUE,
//     password VARCHAR(100) NOT NULL
// );

// INSERT INTO users (email, password) VALUES ('test@example.com', '123456');

if (isset($_POST['sub'])) {
    $pa_email = "/^[a-zA-Z0-9_%+.]+@[a-z0-9-.]+\.[a-z]{2,}$/";
    $pa_pass = "/^.{6,}$/";
    $e = $_POST['email'];
    $p = $_POST['password'];
    $error = [];
    $e_msg = "";
    $p_msg = "";

    if (!preg_match($pa_email, $e)) {
        $e_msg = "invalid email";
    }
    if (!preg_match($pa_pass, $p)) {
        $p_msg = "invalid password";
    }

    if (empty($e_msg) && empty($p_msg)) {
        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "college");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepared statement to check email and password
        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $e, $p);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['email'] = $e;
            header("Location: home1.php");
            exit();
        } else {
            $p_msg = "Incorrect email or password";
        }

        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Email">
        <?php if (!empty($e_msg)) echo "<span style='color:red;'> $e_msg</span>"; ?>
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <?php if (!empty($p_msg)) echo "<span style='color:red;'> $p_msg</span>"; ?>
        <br><br>
        <input type="submit" value="Login" name="sub">
    </form>
</body>
</html>


