<?php
    session_start();
    if (isset($_SESSION['registered']) && $_SESSION['registered']) {
        header("Location:list.php");
        exit();
    }
    if ($_SERVER["REQUEST.METHOD"] == "POST") {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        $_SESSION['registered'] = true;

        header("Location: list.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username"> <br><br>
        <label for="">Mật khẩu</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>