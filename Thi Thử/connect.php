<?php
    $hostname = "localhost";
    $db_name = "db_plane";
    $username = "root";
    $password = "";
    // Dựng đối tượng PDO
    try{
        $connect = new PDO("mysql:host=$hostname;dbname=$db_name",$username,$password);
        $connect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Kết nối thành công";
    }
    catch(PDOException $e){
        $e->getMessage();
    }
?>