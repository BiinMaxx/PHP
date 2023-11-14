<?php
    // Lấy thông tin bảng danh mục 
    require "connect.php";
    require "function.php";
    $sql="SELECT * FROM `airlines` ";
    $data=$connect->query($sql);
    $listPlane=$data->fetchAll();
    // showArray($listCate);    

    if(isset($_POST['btn_add'])){
        // Validate
        // upfile
        $dir="uploads/";
        $up_name=basename($_FILES['image']['name']);
        $upFile=$dir.$up_name;
        move_uploaded_file($_FILES['image']['tmp_name'],$upFile);
        // Lấy thông tin sản phẩm mới   
        $flight_number=$_POST['flight_number'];
        $image=$upFile;
        $total_passenger=$_POST['total_passenger'];
        $description=$_POST['description'];
        $airline_id=$_POST['airline_id'];
        $sql="INSERT INTO `flights` (`flight_number`, `image`, `total_passenger`, `description`, `airline_id`) VALUES ('{$flight_number}', '{$image}', '{$total_passenger}', '{$description}', ' {$airline_id}')";
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
    <title>Thêm thông tin máy bay</title>
</head>
<body>
    <h1>Thêm thông tin máy bay</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Số hiệu máy bay</label>
        <input type="text" name="flight_number"> <br><br>
        <label for="">Ảnh máy bay</label>
        <input type="file" name="image"> <br><br>
        <label for="">Số lượng chỗ ngồi</label>
        <input type="text" name="total_passenger"> <br><br>
        <label for="">Miêu tả máy bay</label>
        <input type="text" name="description"> <br><br>
        <label for="">Danh mục sản phẩm</label>
        <select name="airline_id" id="">
            <option value="">--Chọn--</option>
            <?php
                foreach($listPlane as $plane){
                    ?>
                        <option value="<?php echo $plane['airline_id'] ?>"><?php echo $plane['airline_name'] ?></option>
                    <?php
                }
            ?>
        </select> <br>
        <input type="submit" name="btn_add" value="Thêm mới">
    </form>
</body>
</html>