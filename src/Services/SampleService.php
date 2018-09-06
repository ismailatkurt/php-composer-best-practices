<?php

namespace Acme\Services;

use Acme\Repositories\SampleRepository;

class SampleService
{
    /**
     * @var SampleRepository
     */
    private $sampleRepository;

    /**
     * @param SampleRepository $sampleRepository
     */
    public function __construct(SampleRepository $sampleRepository)
    {
        $this->sampleRepository = $sampleRepository;
    }

    /**
     * @return \Acme\Models\Sample[]|array
     */
    public function all()
    {
        return $this->sampleRepository->all();
    }
}
