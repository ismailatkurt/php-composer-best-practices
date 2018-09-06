<?php

namespace Acme\UnitTests\Models;

use Acme\Models\Sample;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function construct_test()
    {
        // prepare
        $faker = Factory::create();

        $uuid = $faker->uuid;
        $name = $faker->name;

        // test
        $classUnderTest = new Sample($uuid, $name);

        // verify
        $this->assertInstanceOf(Sample::class, $classUnderTest);
    }
}
