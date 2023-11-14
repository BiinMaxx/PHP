<?php
require "connect.php";
    if (isset($_POST['btn_signin'])) {
        // Sau khi validate 
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql="INSERT INTO `tbl_user` (`username`, `password`) VALUES ( '{$username}', '{$password}')";
        $connect -> exec($sql);
        header("Location:list.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí thành viên</title>
</head>
<body>
    <h1>Đăng kí thành viên</h1>
    <form action="" method="POST">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="user"><br><br>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass"><br><br>
        <input type="submit" name="btn_signin" value="Đăng Kí">
    </form>
</body>
</html>