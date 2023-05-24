<?php

function evenOdd($n){
    
    if($n%2==0){
       return true; 
    }else{
        return false;
    }
}

$x=8;

$new = evenOdd($x);
echo $new;


?>