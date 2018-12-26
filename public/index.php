<?php
/**
 * Created by Maus 24.12.2018 6:19 mygomel@gmail.com
 */
 
require __DIR__.'/../App/autoload.php';

$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);

//var_dump($parts); die;

$ctrl = $parts[1] ? ucfirst($parts[1]) : 'Index';

$class = '\App\Controllers\\' . $ctrl;


$ctrl = new $class;
$ctrl();