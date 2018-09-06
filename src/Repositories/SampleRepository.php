<?php

namespace Acme\Repositories;

use Acme\Models\Sample;

class SampleRepository
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct()
    {
        $this->filePath = dirname(dirname(__DIR__)) . "/application/sample-data.json";
    }

    /**
     * @return array|Sample[]
     */
    public function all()
    {
        $sampleDataArray = \json_decode(file_get_contents($this->filePath), true);

        $sampleInstances = [];
        foreach ($sampleDataArray as $sampleData) {
            $sampleInstances[] = new Sample($sampleData['uuid'], $sampleData['name']);
        }

        return $sampleInstances;
    }
}
