<?php

/**
*
* main controller
* php version 8.0
*/
// require '../App/Controllers/Posts.php';
// require '../Core/Router.php';
// echo 'Requested url="'.$_SERVER["QUERY_STRING"].'"';

spl_autoload_register(function($class){
    $root =dirname(__DIR__);
    $file = $root.'/'.str_replace('\\','/',$class).'.php';
    if(is_readable($file)){
        require $root . '/'.str_replace('\\','/',$class).'.php';
    }
});

$router = new Core\Router();
$router->add('',['controller'=>'Home','action'=>'index']);
$router->add('home',['controller'=>'Home','action'=>'index']);
$router->add('catagorey',['controller'=>'Home','action'=>'show']);
$router->add('checkout',['controller'=>'Home','action'=>'showCheckOut']);
$router->add('detail',['controller'=>'Home','action'=>'showDetail']);
$router->add('{controller}');
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
$router->add('admin/{controller}/{action}',['namespace' =>'Admin']);
//echo $_SERVER["QUERY_STRING"];
// echo "<pre>";
// var_dump($router->getRoutes());
// echo "</pre>";
$router->dispatch($_SERVER["QUERY_STRING"]);



