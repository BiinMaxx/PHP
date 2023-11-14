<?php
if (isset($_POST['btn_login'])) {
    echo "Xin chào: {$_POST['usename']}";
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gửi dữ liệu lên sever bằng phương thức POST</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="usename" ><br><br>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass"><br><br>
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
</body>
</html>