<?php

require "../vendor/autoload.php";

require "../application/app.php";

/** @var \Acme\Controllers\IndexController $controller */
$controller = $app->getContainer()->get(DiKeys::INDEX_CONTROLLER);

$controller->all();