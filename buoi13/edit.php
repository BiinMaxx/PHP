<?php
    require "connect.php";
    require "function.php";
    // lấy thông tin bảng danh mục\
    $sql="SELECT * FROM `categories`";
    $data=$connect->query($sql);
    $listCat=$data->fetchAll();

    // showArray($listCat);
    // Lấy thông tin của sản phẩm muốn edit
    $id=$_GET['id'];
    $sql="SELECT * FROM `products` WHERE `pro_id`={$id}";
    $data=$connect->query($sql);
    $proEdit=$data->fetch();
    // showArray($proEdit);
    
    if(isset($_POST['btn_edit'])){
     // Validate
     // upfile
     $checkUp=false;
       $dir="uploads/";
       $up_name=basename($_FILES['pro_img']['name']);
       $upFile=$dir.$up_name;
        if(move_uploaded_file($_FILES['pro_img']['tmp_name'],$upFile)){
            $checkUp=true;
        };
       // lấy thông tin sản phẩm mới
       $pro_name=$_POST['pro_name'];
       $pro_price=$_POST['pro_price'];
       if($checkUp==true){
            $pro_img=$upFile;
       }else{
            $pro_img=$proEdit('pro_img');
       }
       $pro_img=$upFile;
       $total=$_POST['total'];
       $pro_desc=$_POST['pro_desc'];
       $cat_id=$_POST['cat_id'];
       $sql="UPDATE `products` SET `pro_name` = '{$pro_name}', `pro_price` = '{$pro_price}', `pro_img`= '{$pro_img}', `total` = '{$total}', `pro_desc` = '{$pro_desc}', `cat_id` = '{$cat_id}' WHERE `products`.`pro_id` = {$id}";
       $connect->exec($sql);
        header("Location:list.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin sản phẩm</title>
</head>
<body>
    <h1>Cập nhật thông tin sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="pro_name" value="<?php echo $proEdit['pro_name']?>"><br><br>
        <label for="">Gía sản phẩm</label>
        <input type="text" name="pro_price" value="<?php echo $proEdit['pro_price']?>"><br><br>
        <label for="">Ảnh sản phẩm</label>
        <input type="file" name="pro_img"><br><br>
        <label for="">Số lượng sản phẩm</label>
        <input type="text" name="total" value="<?php echo $proEdit['total']?>"><br><br>
        <label for="">Mô tả sản phẩm</label>
        <input type="text" name="pro_desc" value="<?php echo $proEdit['pro_desc']?>"><br><br>
        <label for="">Danh mục sản phẩm</label><br><br>
        <select name="cat_id" id="">
            <option value="">--chọn--</option>
            <?php
                foreach($listCat as $cat){
                ?>
                    <option value="<?php echo $cat['cat_id']?>" <?php if($proEdit['cat_id']=$cat['cat_id']) echo "selected"?>><?php echo $cat['cat_name']?></option>
                <?php
                }
            ?>
            
        </select><br><br>
        <input type="submit" name="btn_edit" value="Cập nhật">
    </form>
</body>
</html>