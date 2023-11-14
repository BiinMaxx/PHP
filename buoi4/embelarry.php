<?php
   $listSV=array(
    array(
        'masv'=>"PH001",
        'name'=>"Vũ Ngọc Hải",
        'point'=>9,
        'avanata'=> '../images/cristiano-ronaldo-870622.jpg',
    ),
    array(
        'masv'=>"PH002",
        'name'=>"Nguyễn Thị Huyền Trang",
        'point'=>10,
        'avanata'=>'../images/mbappe.jpg',
    ),
    array(
        'masv'=>"PH003",
        'name'=>"Vũ Hải Đăng",
        'point'=>2,
        'avanata'=> '../images/cristiano-ronaldo-870622.jpg',
    ),
    array(
        'masv'=>"PH004",
        'name'=>"Trịnh An Huệ Tâm",
        'point'=>4,
        'avanata'=> '../images/cristiano-ronaldo-870622.jpg',
    ),
    array(
        'masv'=>"PH005",
        'name'=>"Vũ Quang Huy",
        'point'=>6,
        'avanata' => '../images/cristiano-ronaldo-870622.jpg',
    ),
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổ dữ liệu lên bảng</title>
    <style>
        table tr th{
            border-bottom: 3px solid green;
            padding: 7px 20px;
        }
        table tr td{
            border-bottom: 1px solid green;
            padding: 7px 20px;
        }
    </style>
</head>
<body>
    <h1>DANH SÁCH SINH VIÊN</h1>
    
    <table>
        <tr>
            <th>STT</th>
            <th>Mã Sinh Viên</th>
            <th>Họ và Tên</th>
            <th>Điểm thi</th>
            <th>Trạng thái</th>
            <th>Ảnh</th>
        </tr>
        <?php
        $stt=0;
        foreach($listSV as $sv){
            if ($sv ['point']<5) {
                $status ="fall";
            }else {
                $status="pass";
            }
            $stt++;
            ?>
            <tr>
                 <td><?php echo $stt;?></td>
                 <td><?php echo $sv['masv']?></td>
                 <td><?php echo $sv['name']?></td>
                 <td><?php echo $sv['point']?></td>
                 <td><?php echo $status ?></td>
                 <td><img src="<?php echo $sv['avanata'] ?>"  alt="" style='width : 30px'></td>
            </tr>
            <?php
        }
        $countPass=0;
foreach($listSV as $sv){
    if($sv['point']<5){
        echo "Tên sinh viên: ".$sv['name'].". Có mã sinh viên là: ".$sv['masv'];
        echo "<br>----------------------------------------------------------------</br>";
    }else{
        $countPass++;
    }
}
echo "tổng số sinh viên thi pass là: {$countPass}";
        ?>
    </table>
<!--     
    1.Hiển thị bảng danh sách sinh viên học lại 
    2.Thêm 1 cột trạng thái vào bảng danh sách sinh viên 
    điền trạng thái pass vào sinh viên thi đạt và trạng thái fall vào sinh viên học lại
    3. Thêm vào bảng sinh viên cột avanta, hiển thị ảnh của các sinh viên -->
</body>
</html>