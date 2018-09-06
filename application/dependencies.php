<?php

$container = $app->getContainer();

$container[DiKeys::SAMPLE_REPOSITORY] = function () {
    return new \Acme\Repositories\SampleRepository();
};

$container[DiKeys::SAMPLE_SERVICE] = function () use ($container) {
    return new \Acme\Services\SampleService(
        $container->get(DiKeys::SAMPLE_REPOSITORY)
    );
};

$container[DiKeys::INDEX_CONTROLLER] = function () use ($container) {
    return new \Acme\Controllers\IndexController(
        $container->get(DiKeys::SAMPLE_SERVICE)
    );
};

return $container;
