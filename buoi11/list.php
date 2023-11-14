<?php
require "connect.php";
require "function.php";
$sql ="SELECT * FROM `tbl_user`";
$data=$connect -> query ($sql);
// $listUser= $data->fetchAll(PDO::FETCH_ASSOC);
$listUser= $data->fetchAll();
// showArray($listUser);
?>                                                                       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thành viên </title>
    <style>
        table tr th{
            border-bottom: 3px solid pink;
            padding: 7px 20px;
        }
        table tr td{
            border-bottom: 1px solid chartreuse;
            padding: 7px 20px;
        }
    </style>
</head>
<body>
    <h1>Danh sách thành viên</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $stt = 0;
        foreach ($listUser as $user ) {
            $stt++;
            ?>
            <tr>
            <th><?php echo $stt?></th>
            <th><?php echo $user['username']?></th>
            <th><?php echo $user['password']?></th>
            <td><a href="delete.php?id=<?php echo $user['user_id']?>">Xóa</a>|<a href="edit.php?id=<?php echo $pro['pro_id'] ?>">Sửa</a></td>
        </tr>
        <?php
        }
        ?>
        
    </table>
</body>
</html>