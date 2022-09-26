<?php
    require_once 'api/route.php';

    $route = new Route();

    $route->add('/', function() {
        echo 'HOME';
    });

    $route->add('/name', function() {
        echo 'Name Home';
    });

    $route->add('/name/.+', function($name) {
        echo "Name $name";
    });