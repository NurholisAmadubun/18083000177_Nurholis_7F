<?php

include "koneksi.php";
 



?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <style>
    label, ul { 
        display: block;
        text-align: center;
    }
</style>
<style>
    ul {
        background-image: url(toko.jpg);
    }
    h1 {
        text-align: center;
    }
</style> 
   
    
</head>
<body>
    
<h1>Halaman Registrasi</h1>

<form action=""method="post">
<style>
    ul {
        height: 100vh;
        
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
}
</style>
<style>
    label {
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #2979ff;
        color: #fff;
        font-size: 20px;
}
</style>
<style>
    label {
       width: 100%;
        padding: 5px 0;
        border: none;
        background-color:#2979ff;
        font-size: 18px;
        color: #ffffff;
}
</style>

    <ul>
        <br>
        <br>
        <label for="username">Username :</label>
        <input type="text" name="username" id=username>
        <br>
        <br>
        <label for="kata_sandi">Password :</label>
        <input type="password" name="kata_sandi" id=kata_sandi>
        <br>
        <br>
        <label for="kata_sandi2">Konfirmasi Password :</label>
        <input type="password" name="kata_sandi2" id=kata_sandi2>
        <br>
        <br>
        <button type="submit" name="register">
            Register</button>
    </ul>
    </form>
    

    <?php
    if( isset($_POST["register"]) ) {

        $username = $_POST["username"];
        $kata_sandi = $_POST["kata_sandi"];
        $kata_sandi2= $_POST["kata_sandi2"];

        //query insert data
         $cocok=$kata_sandi == $kata_sandi2; 
        
            
        if($cocok) {
            $query= mysqli_query ( $conn,"INSERT INTO user (username, kata_sandi) VALUES ('$username', '$kata_sandi')");
        
            echo "
                <script>
                    alert('berhasil register');
                    document.location.href = 'login.php';
                </script>
            ";    
        } else {
            echo"
                <script>
                    alert('gagal register');
                    document.location.href = 'registrasi.php';
                </script>
                ";
            }
    }


    ?>
</body>
</html>