<?php
$listSV=array(
        array(
            'name' => "Lê Thu Hà",
            'MaSv' => "PH001",
            'point'=> 6,
        ),
        array(
            'name' => "Lê Thu Hà",
            'MaSv' => "PH002",
            'point'=> 2,
        ),
        array(
            'name' => "Lê Thu Hà",
            'MaSv' => "PH003",
            'point'=> 1,
        ),
        array(
            'name' => "Lê Thu Hà",
            'MaSv' => "PH004",
            'point'=> 7,
        ),
    );
    function getStatus($point){
        if ($point>=5) {
            return "Pass";
        }else{
            return "Fail";
        }
    }
    echo getStatus(4);
    
?>