<?php
//     $sv1=array(
//             'id_sv'=>"PH001",
//             'name'=>"Trịnh Công Cương",
//             'point'=>7
//     );
//     $sv2=array(
//         'id_sv'=>"PH002",
//         'name'=>"Nguyễn Thái LOng",
//         'point'=>7
// );
//     $sv3=array(
//     'id_sv'=>"PH003",
//     'name'=>"Nguyễn Văn HUy",
//     'point'=>7
// );
// $listSv=[$sv1,$sv2,$sv3];

    $listSv=array(
        array(
            'id_sv'=> "PH001",
            'name'=> "Trịnh Công Cương",
            'point'=> 3
        ),
        array(
            'id_sv'=> "PH002",
            'name'=> "Nguyễn Thái Long",
            'point'=> 4
        ),
        array(
            'id_sv'=> "PH003",
            'name'=> "Nguyễn Văn Huy",
            'point'=> 7
        ),
    );
echo "<pre>";
print_r($listSv);
echo "</pre>";
echo "<hr>";
echo $listSv[2] ['name'] ; 
echo "<br>";
echo $listSv[2] ['id_sv'] ;

// Xuất ra màn hình họ tên và masv của những sv thi trượt 
echo "<hr>";
echo "Students who failed the exam:<br>";

foreach ($listSv as $student) {
    if ($student['point'] < 5) {
        echo $student['name'] . " - " . $student['id_sv'] . "<br>";
    }
}

?>