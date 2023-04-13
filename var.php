<?php

$x=0;
function hello(){
    global $x;
    $x=2;
    echo $x;
}
 function hi(){
    $x=2;

    echo $x;
 }
 hello();
 hi();
?>