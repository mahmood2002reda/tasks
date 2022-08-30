<?php


function load_class($class_name){
$path_file= "model/".$class_name.'.php';
if(file_exists($path_file)){
    require $path_file ;
}

}
spl_autoload_register("load_class"); 


function load_model($class_name){
    $path_file= "model/serves/". $class_name .".php";
    if(file_exists($path_file)){
        require $path_file ;
    }

} 

spl_autoload_register("load_model");
