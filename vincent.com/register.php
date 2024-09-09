<?php
   include "command/register.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "layout/header.html" ?>

<h3>DAFTAR</h3>
<i><?= $register_message ?></i>
<form action="register.php" method="POST">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <button type="submit" name="register">daftar</button>
</form>

<?php include "layout/footer.html" ?>
</body>
</html>