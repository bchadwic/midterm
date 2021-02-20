<?php

function validName($name){
    return isset($name);
}

function validAnswer($args){
    $arr = array("This midterm is easy in difficulty", "This midterm is medium in difficulty", "This midterm is hard in difficulty");
    return in_array($args, $arr);
}