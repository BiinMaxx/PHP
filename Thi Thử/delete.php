<?php
    require "connect.php";
    $id=$_GET['id'];
    $sql="DELETE FROM `flights` WHERE `flight_id`={$id}";
    $connect->exec($sql);
    header("Location:list.php");
?>