<?php
    // Lấy thông tin bảng danh mục 
    require "connect.php";
    require "function.php";
    $sql="SELECT * FROM `airlines` ";
    $data=$connect->query($sql);
    $listPlane=$data->fetchAll();
    // showArray($listCate);  
    
    $id=$_GET['id'];
    $sql="SELECT * FROM `flights` WHERE `flight_id`={$id} ";
    $data=$connect->query($sql);
    $proEdit=$data->fetch();      

    if(isset($_POST['btn_edit'])){
        // Validate
        // upfile
        $checkUp=false;
        $dir="uploads/";
        $up_name=basename($_FILES['image']['name']);
        $upFile=$dir.$up_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$upFile)){
            $checkUp=true;
        };
        // Lấy thông tin sản phẩm mới   
        $flight_number=$_POST['flight_number'];
        if($checkUp==true){
            $image=$upFile;
        }else{
            $image=$proEdit['image'];
        };
        // move_uploaded_file($_FILES['image']['tmp_name'],$upFile);
        // Lấy thông tin sản phẩm mới   
        $total_passenger=$_POST['total_passenger'];
        $description=$_POST['description'];
        $airline_id=$_POST['airline_id'];
        $sql="UPDATE `flights` SET `flight_number` = '{$flight_number}', `image` = '{$image}', `total_passenger` = '{$total_passenger}', `description` = '{$description}', `airline_id` = '{$airline_id}' WHERE `flights`.`flight_id` = {$id}";
        // echo $sql;
        // die();
        $connect->exec($sql);
        header("Location:list.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin máy bay</title>
</head>
<body>
    <h1>Cập nhật thông tin máy bay</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Số hiệu máy bay</label>
        <input type="text" name="flight_number" value="<?php echo $proEdit['flight_number'] ?>"> <br><br>
        <label for="">Ảnh máy bay</label>
        <input type="file" name="image"> <br><br>
        <label for="">Số lượng chỗ ngồi</label>
        <input type="text" name="total_passenger" value="<?php echo $proEdit['total_passenger'] ?>"> <br><br>
        <label for="">Miêu tả máy bay</label>
        <input type="text" name="description"value="<?php echo $proEdit['description'] ?>"> <br><br>
        <label for="">Danh mục sản phẩm</label>
        <select name="airline_id" id="">
            <option value="">--Chọn--</option>
            <?php
                foreach($listPlane as $plane){
                    ?>
                        <option value="<?php echo $plane['airline_id'] ?>" <?php if($proEdit['airline_id']=$plane['airline_id']) echo "selected" ?>><?php echo $plane['airline_name'] ?></option>
                    <?php
                }
            ?>
        </select> <br>
        <input type="submit" name="btn_edit" value="Cập nhật">
    </form>
</body>
</html>