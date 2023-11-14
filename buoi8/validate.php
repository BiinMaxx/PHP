<?php
session_start();
require "function.php";
    if(isset($_POST['btn_register'])){
        // showArray($_POST);
        // die();
        // validate
        $error=[];
        // Kiểm tra username
        if(empty($_POST['user'])){
            $error['username']="Bạn cần có tên đăng nhập";
        }else{
            $pattem ="/^[A-Z,a-z0-9_]{6,32}$/";
            if (!preg_match($pattem,$_POST['user'])) {
                $error['username']="Tên đăng nhập không đúng";
            }else{
            $username=$_POST['user'];
        }
        }
        //Kiểm tra password
        if(empty($_POST['pass'])){
            $error['pass']="Bạn cần nhập mật khẩu";
        }else{
            $password=$_POST['pass'];
        }
        // Kiểm tra email
        if(empty($_POST['email'])){
            $error['email']="Bạn cần nhập email";
        }else{
            $email=$_POST['email'];
        }
        // Kiểm tra địa chỉ
        if(empty($_POST['address'])){
            $error['address']="Bạn cần nhập địa chỉ";
        }else{
            // $address=$_POST['address'];
            // c1
            // switch($_POST['address']){
            //     case 1:
            //         $address="Hà Nội";
            //         break;
            //     case 2:
            //         $address="Hải Phòng";

            //         break;
            //     case 3:
            //         $address="Nam Định";
            //         break;
            // }
            // c2
            $key=$_POST['address'];
            $address=[
                1=>"Hà Nội",
                2=>"Hải Phòng",
                3=>"Nam Định"
            ];
        }
        if(!empty($error)){
            // echo "Lỗi <br>";
            // echo "<pre>";
            // print_r($error);
            // echo "</pre>";

        }else{
            $_SESSION['user']=$username;
            $_SESSION['pass']=$pass;
            header("Location:trangchu.php?user=$username");
            // $message="Bạn đã đăng kí thành công";
            // echo "Thông tin đăng kí gồm tên đăng nhập <b>{$username}</b> Hòm thư: <b>$email</b> Nơi ở: <b>{$address[$key]}</b>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate form</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

    <h1>Đăng kí</h1>
    <form action="" method="POST">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="user" value="<?php if(isset($username)) echo $username ;?>"><br><br>
        <p class="error"><?php if(isset($error['username'])) echo $error['username']?></p>
        <label for="">Mật khẩu:</label>
        <input type="password" name="pass"><br><br>
        <p class="error"><?php if(isset($error['pass'])) echo $error['pass']?></p>
        <label for=""> Hòm thư: </label>
        <input type="text" name="email"><br><br>
        <p class="error"><?php if(isset($error['email'])) echo $error['email']?></p>     
        <label for="">Nơi ở:</label>
        <select name="address" id="">
            <option value="">---Chọn---</option>
            <option value="1"<?php if(isset($key)&& $key=="1") echo "selected"?>>Hà Nội</option>
            <option value="2" <?php if(isset($key)&& $key=="2") echo "selected"?>>Hải Phòng</option>
            <option value="3" <?php if(isset($key)&& $key=="3") echo "selected"?>>Nam Định</option>
        </select>
        <!-- <label for="">Sở thích</label><br>
        <input type="checkbox" name="hobby[]">Nghe nhạc
        <input type="checkbox" name="hobby[]">Xem phim
        <input type="checkbox" name="hobby[]">Đạp xe
        <input type="checkbox" name="hobby[]">đọc sách -->

        <p class="error"><?php if(isset($error['address'])) echo $error['address']?></p>
        <input type="submit" name="btn_register" value="Đăng kí">
        <!-- <p><?php if(isset($message)) echo $message;?></p> -->
    </form>
</body>
</html>