<?php
    include 'service/database.php';
    session_start();
    $login_message = "";

    if (isset($_SESSION["is_login"])) {
        header("Location: dashboard.php");
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
      $password = $_POST['password'];
      $hash_password = hash("sha256", $password);

     $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hash_password'";
     
     $result = $db->query($sql);
     
     if ($result->num_rows > 0) {
       $data = $result->fetch_assoc();
        $_SESSION['username'] = $data['username'];
        $_SESSION["is_login"] = true;

       header("Location: dashboard.php");
    } else {
       $login_message = "Username atau Password salah";
     }
     $db->close();
    }
?>