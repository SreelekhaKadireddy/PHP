<?php
//local scope
function test(){
    $a=10;
    echo $a;
}
test();
//echo $a; -undefined
//global scope
$x=5;
function test2(){
    global $x; //global keyword to access global variable inside a function
    $y=10;
    echo  "\n" ,$x+$y;
}
test2();
echo "\n",$x;
?>
