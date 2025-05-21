<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller.php" method="post">
  Text: <input type="text" name="text"><br>
  Email: <input type="email" name="email"><br>
  Password: <input type="password" name="pass"><br>
  Radio: <input type="radio" name="gender" value="M"> M
         <input type="radio" name="gender" value="F"> F<br>
  Checkbox: <input type="checkbox" name="check[]" value="A"> A
            <input type="checkbox" name="check[]" value="B"> B<br>
  Select: <select name="branch">
            <option>IT</option>
            <option>CE</option>
          </select><br>
  <input type="submit">
</form>

</body>
</html>