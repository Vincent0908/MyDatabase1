<?php
    session_start();
    include "command/dashboard.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <h3>SELAMAT DATANG <?= $_SESSION['username'] ?></h3>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>