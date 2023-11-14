<?php
    if (isset($_POST['btn_up'])) {
    //    echo "<pre>";
    //    print_r($_FILES);
    //    echo "</pre>";
    $dir="../uploads/";
   $flienumber= basename($_FILES['hafile']['name']);
    $upfile= $dir.$flienumber;
    if(move_uploaded_file($_FILES['hafile']['tmp_name'],$upfile)){
        echo "UP thành công";
    }else{
        echo "Up thất bại!!!";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload ảnh lên sever</title>
</head>
<body>
    <h1>UP File</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="hafile">
        <input type="submit" name="btn_up" value="UP File">
    </form>
</body>
</html>