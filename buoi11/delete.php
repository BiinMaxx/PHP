<?php
require "connect.php";
$id = $_GET['id'];
$sql = "DELETE  FROM `tbl_user` WHERE `user_id`={$id} ";
$connect -> exec($sql);
header("Location:list.php");
?>