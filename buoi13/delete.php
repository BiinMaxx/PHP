<?php
    require "connect.php";
    $id=$_GET['id'];
    $sql="DELETE FROM `products` WHERE `pro_id`={$id}";
    $connect->exec($sql);
    header("Location:list.php");
?>