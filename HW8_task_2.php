<?php

//find by index
$arr = array(1,2,3,4,5);
var_dump($arr);

foreach ($arr as $key=>$value){

    if($key == 3){
        echo $value;
    }
}
//array copy
$newArr =[];


foreach ($arr as $key=>$value){

    $newArr = $value;
    echo " Copied value => ".$newArr."\n";
}

//3. factorial definition
function fact($n) {
    return  $n<= 0? 1 : $n * fact($n-1);

}
echo fact(4);






