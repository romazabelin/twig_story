<?php
//try {} catch (Exception $e) {
//    die ('ERROR: ' . $e->getMessage());
//}
include_once 'Twig\lib\Twig\Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('Twig/templates');

$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));