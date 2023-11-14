<?php
//  Khai báo mảng
// $arr=array(3,6,2,6);
$arr=array(
    0 => 4,
    1 => 3,
    2 => 5,
    'name' => "Cương"
);  
$arr[]="Biin";
// var_dump($arr);
// Xuất mảng
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr/>";
// Truy xuất đến phần tử mảng
echo "Mảng lỗi";
// $error=[];
// $error['user']="Tên đăng nhập phải đúng định dạng";
// $error['pass']="Mật khẩu cần đúng định dạng";
// $error['email']="Địa chỉ email chưa chính xác";
$error=array(
    'user'=>"Tên đăng nhập không đúng định dạng",
    'pass'=>"Mật khẩu cần đúng định dạng",
    'email'=>"Địa chỉ email chưa chính xác"
);
echo "<pre>";
print_r($error);
echo "</pre>";
?>