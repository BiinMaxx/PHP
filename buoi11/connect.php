<?php
$hostname="localhost";
$db_name="user_307";
$username="root";
$pass="";
// Dựng đối tượng PDO
try{
    $connect=new PDO("mysql:host=$hostname;dbname=$db_name",$username,$pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công <br><br>";
}
catch(PDOException $e){
    $e->getMessage();
}

?>