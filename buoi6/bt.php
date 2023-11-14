<?php
    $listSV = array(
        array(
        'STT' => 1,
        'Masv'=> "PH001",
        'Họ và Tên' => "Trịnh Công Cương",
        'point'=>9,
        ),
        array(
        'STT' => 2,
        'Masv'=> "PH002",
        'Họ và Tên' => "Nguyễn Thái Long",
        'point'=>4,
        ),
        array(
        'STT' => 3,
        'Masv'=> "PH003",
        'Họ và Tên' => "Nguyễn Văn Huy",
        'point'=>5,
        ),
        array(
        'STT' => 4,
        'Masv'=> "PH004",
        'Họ và Tên' => "Trịnh Thanh Phong",
        'point'=>10,
        ),
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table tr th{
            border-bottom: 3px solid rgb(252, 0, 0);
            padding: 7px 20px;
        }
        table tr td{
            border-right: 1px solid blue;
            border-bottom: 1px solid  rgb(252, 0, 0);
            padding: 7px 20px;
        }
    </style>
</head>
<body>
    <h1>Danh sách sinh viên -_-</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Họ và Tên</th>
            <th>Mã Sv</th>
            <th>Điểm</th>
            <th>Trạng thái</th>
        </tr>
    
    <?php
    $stt=0;
    foreach ($listSV as $sv) {
        if ($sv ['point'] <5) {
            $status = "Fail";
        }else{
            $status = "Pass";
        }
        $stt++;
        ?>
        <tr>
            <td><?php echo $stt;?></td>
                 <td><?php echo $sv['Họ và Tên']?></td>
                 <td><?php echo $sv['Masv']?></td>
                 <td><?php echo $sv['point']?></td>
                 <td><?php echo $status ?></td>

        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>