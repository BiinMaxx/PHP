<?php
    // Định nghĩa hàm
    // function sum(){
    //     $a =5;
    //     $b =9;
    //     $total=$a + $b;
    //     echo $total;
    // }
    // sum();
    // hàm có tham số truyền vào
    // function  sum($a,$b){
    //     $total = $a + $b;
    //     echo $total;
    // }
    // sum(5,7);
    // echo "<hr>";
    // sum(10,34);
    // echo "<hr>";
    // $x= 4 ; $y=9;
    // sum ($x,$y);
    // $name = ['Ha','Mai','Ly','Hoa'];
    // function showArray($arr){
    //     echo "<pre>";
    //     print_r($arr);
    //     echo "</pre>";
    // }
    // showArray($name);                                                            

    // Hàm có giá trị trả về
    // function sum($a,$b){
    //     $total = $a + $b;
    //     return $total;
    // }
    // $bt = 4 + 5 + sum(6,7) + sum (2,3);
    // echo "Biểu thức có giá trị : {$bt}";                                                                                                                       

    // $x = 4;
    // function asign (){
    //     $x = 0;
    //     echo "x ở trong: {$x}";
    // }
    // asign ();
    // echo " x ở ngoài: {$x}";

    // Hàm với tham số tùy chọn
    function sayHello ($x, $y="World"){
        echo $x.$y;
    }
    sayHello('Hello',"Hà");
    echo "<hr>";
    sayHello('Hello');
    
    // Hãy viết hàm autoSum() trả về tổng của tất cả các tham số truyền vào 
    // Trả về null nếu ko có thm số nào đc truyền vào

    // function autoSum() {
    //     $total = null;
        
      
    //     if (func_num_args() > 0) {
    //         $args = func_get_args();
    //         foreach ($args as $arg) {
    //             $total += $arg;
    //         }
    //     }
    //     return $total;
    // }
    // $result = autoSum(1, 2, 3); 
    // echo $result;

    // $result = autoSum(4, 5, 6, 7); 
    // echo $result;

    // $result = autoSum(); 
    // echo $result;
?>