<?php

namespace Acme\Controllers;

use Acme\Services\SampleService;

class IndexController
{
    /**
     * @var SampleService
     */
    private $sampleService;

    /**
     * @param SampleService $sampleService
     */
    public function __construct(SampleService $sampleService)
    {
        $this->sampleService = $sampleService;
    }

    /**
     * @return false|string
     */
    public function all()
    {
        echo \json_encode($this->sampleService->all());
    }
}
