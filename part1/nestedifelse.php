<?php
$condition1=true;
$conditio2=true;
$condition3=false;

if($condition1&&$condition2&&$condition3){
    echo"ok";

}elseif($condition1&&$condition2){
    echo"1";
}elseif($condition1){
    echo"2";
}
    
// elseif($condition2&&$condition3){
//     echo"3";
// }
else{
    "no one";
}
?>