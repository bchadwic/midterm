<?php

function validName($name){
    return isset($name);
}

function validAnswer($args){
    foreach($args as $arg){
        if(arg != "This midterm is easy in difficulty" &&
        arg != "This midterm is medium in difficulty" &&
        arg != "This midterm is hard in difficulty")
        return false;
    }
    return true;

}