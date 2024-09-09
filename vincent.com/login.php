<?php
    include "command/login.php";
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

<h3>MASUK</h3>
<i><?= $login_message ?></i>
<form action="login.php" method="POST">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <button type="submit" name="login">MASUK</button>
</form>

<?php include "layout/footer.html" ?>
</body>
</html>