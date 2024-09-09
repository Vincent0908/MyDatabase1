<?php
    include "service/database.php";
    session_start();

    $register_message = "";

    if (isset($_SESSION["is_login"])) {
        header("Location: dashboard.php");
    }

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $register_message = "Username atau password tidak boleh kosong";
        } else {
            $hash_password = hash("sha256", $password);

            try {
                $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
        
                if ($db->query($sql)) {
                    $register_message = "data berhasil masuk, silahkan login";
                }else {
                    $register_message = "data gagal masuk, coba lagi";
                }
                } catch (mysqli_sql_exception) {
                    $register_message = "Username sudah ada, coba yang lain";
                }
        }
         
        $db->close();
    }
?>