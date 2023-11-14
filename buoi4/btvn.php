<?php
$listSV=array(
    array(
        'masv'=>"ph001",
        'name'=>"Vũ Ngọc Hải",
        'point'=>9,
    ),
    array(
        'masv'=>"ph002",
        'name'=>"Nguyễn Thị Huyền Trang",
        'point'=>10,
    ),
    array(
        'masv'=>"ph003",
        'name'=>"Vũ Hải Đăng",
        'point'=>2,
    ),
    array(
        'masv'=>"ph004",
        'name'=>"Trịnh An Huệ Tâm",
        'point'=>4,
    ),
    array(
        'masv'=>"ph005",
        'name'=>"Vũ Quang Huy",
        'point'=>6,
    ),
);
//echo "<pre>";
//print_r($listSV);
//echo "</pre>";
echo "<h1> danh sách sinh viên học lại</h1>";
$countPass=0;
foreach($listSV as $sv){
    if($sv['point']<5){
        echo "Tên sinh viên: ".$sv['name']." Có mã sinh viên là: ".$sv['masv'];
        echo "<br>-------------------------------------------------------</br>";
    }else{
        $countPass++;
    }
}
echo "tổng số sinh viên thi pass là: {$countPass}";
//  Thông báo lên trình duyệt tổng số sinh viên thi pass
?>