<?php
    $arr=[4,7,2,7,9,3,9];
    // Xuất ra màn hình các phần tử lớn hơn hoặc bằng 5
    // for($i=0;$i<=count($arr)-1;$i++){
    //     if($arr[$i]>=5){
    //         echo $arr[$i];
    //         echo "<hr>";
    //     }
    // }

     //Cách 2
    // $i=0;
    // while($i <count($arr)){
    //     if ($arr[$i]>=5) {  
    //         echo $arr[$i];
    //         echo "<hr>";
    //     }
    //     $i++;
    // }

    //Cách 3
    // foreach ($arr as $val) {
    //     if ($val>=5) {
    //         echo $val;
    //         echo "<hr>";
    //     }
    // }

    //Dạng đầy đủ
    foreach ($arr as $key => $value) {
        if ($value>=5) {
            echo "Phần tử thứ $key có giá trị là $value";
            echo "<hr>";
        }
    }
?>