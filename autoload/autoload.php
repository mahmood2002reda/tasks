<?php


function load_class($class_name){
    $path_file = 'app/'. $class_name . '.php';
    if (file_exists($path_file)){
        require $path_file ; 
    }
}
echo "hhhh";