<?php
    include_once("controller/Controller.php");

    $controller = new Controller();
    $controller->invoke();

    require_once __DIR__. '/controller/Controller.php';
    $controller = new Controller();
    $controller->invoke();
?>