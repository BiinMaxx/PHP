<?php
    require "connect.php";
    require "function.php";
    // lấy thông tin bảng danh mục\
    $sql="SELECT * FROM `categories`";
    $data=$connect->query($sql);
    $listCat=$data->fetchAll();

    // showArray($listCat);
    
    if(isset($_POST['btn_add'])){
       // Validate
      // upfile
       $dir="uploads/";
       $up_name=basename($_FILES['pro_img']['name']);
       $upFile=$dir.$up_name;
       move_uploaded_file($_FILES['pro_img']['tmp_name'],$upFile);
       // lấy thông tin sản phẩm mới
       $pro_name=$_POST['pro_name'];
       $pro_price=$_POST['pro_price'];
       $pro_img=$upFile;
       $total=$_POST['total'];
       $pro_desc=$_POST['pro_desc'];
       $cat_id=$_POST['cat_id'];
       $sql="INSERT INTO `products` (`pro_name`, `pro_price`, `pro_img`, `total`, `pro_desc`, `cat_id`) VALUES ('{$pro_name}', '{$pro_price}', '{$pro_img}', '{$total}', '{$pro_desc}', '{$cat_id}')";
       $connect->exec($sql);
        header("Location:list.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="pro_name"><br><br>
        <label for="">Gía sản phẩm</label>
        <input type="text" name="pro_price"><br><br>
        <label for="">Ảnh sản phẩm</label>
        <input type="file" name="pro_img"><br><br>
        <label for="">Số lượng sản phẩm</label>
        <input type="text" name="total"><br><br>
        <label for="">Mô tả sản phẩm</label>
        <input type="text" name="pro_desc"><br><br>
        <label for="">Danh mục sản phẩm</label><br><br>
        <select name="cat_id" id="">
            <option value="">--chọn--</option>
            <?php
                foreach($listCat as $cat){
                ?>
                    <option value="<?php echo $cat['cat_id']?>"><?php echo $cat['cat_name']?></option>
                <?php
                }
            ?>
            
        </select><br><br>
        <input type="submit" name="btn_add" value="Thêm mới">
    </form>
</body>
</html>