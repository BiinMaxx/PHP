<?php
  require "connect.php";
  require "function.php";
  $sql="SELECT * FROM `products`as p INNER JOIN `categories` as c ON p.cat_id=c.cat_id ";
  $data=$connect->query($sql);
  $listPro=$data->fetchAll();
//   showArray($listPro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm </title>
    <style>
        table tr th{
            border-bottom:3px solid brown;
            padding: 15px 20px:
        }
        table tr td{
            border-bottom:3px solid brown;
            padding: 15px 20px:
        }
        table tr img{
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <a href="add.php">Thêm mới</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Gía sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Số lượng</th>
            <th>Mô tả</th>
            <th>Danh mục</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $stt=0;
            foreach($listPro as $pro){
        $stt++;
        ?>
        <tr>
            <td><?php echo $stt?></td>
            <td><?php echo $pro['pro_name']?></td>
            <td><?php echo $pro['pro_price']?></td>
            <td><img src="<?php echo $pro['pro_img']?>" alt=""></td>
            <td><?php echo $pro['total']?></td>
            <td><?php echo $pro['pro_desc']?></td>
            <td><?php echo $pro['cat_name']?></td>
            <td><a href="delete.php?id=<?php echo $pro['pro_id']?>">Xóa</a> | <a href="edit.php?id=<?php echo $pro['pro_id']?>">Sửa</a></td>
        </tr>
        <?php
         }
        ?>
        
    </table>
</body>
</html>