<?php
    require "connect.php";
    require "function.php";
    $sql="SELECT * FROM `flights` as p INNER JOIN `airlines` as c on p.airline_id=c.airline_id ";
    $data=$connect->query($sql);
    $listFly=$data->fetchAll();
    // showArray($listPro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách máy bay</title>
    <style>
        table tr th{
            border-bottom: 3px solid brown;
            padding: 7px 20px;
        }
        table tr td{
            border-bottom: 1px solid chartreuse;
            padding: 7px 20px;
        }
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Danh sách máy bay</h1>
    <a href="add.php">Thêm mới</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Số hiệu</th>
            <th>Ảnh</th>
            <th>Số lượng chỗ ngồi</th>
            <th>Miêu tả</th>
            <th>Danh mục</th>
            <th>Thao tác</th>
        </tr>
        <?php
            $stt=0;
            foreach($listFly as $fly){
                $stt++;
                ?>
                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $fly['flight_number'] ?></td>
                    <td><img src="<?php echo $fly['image'] ?>" alt=""></td>
                    <td><?php echo $fly['total_passenger'] ?></td>
                    <td><?php echo $fly['description'] ?></td>
                    <td><?php echo $fly['airline_name'] ?></td>
                    <td><a href="delete.php?id=<?php echo $fly['flight_id'] ?>">Xóa</a> | <a href="edit.php?id=<?php echo $fly['flight_id'] ?>">Sửa</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>