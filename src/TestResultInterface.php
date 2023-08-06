<?php

namespace Programster\Testing;


interface TestResultInterface
{
    /**
     * Retrieves whether the test passed or not. True for passed, false for a failure.
     * @return boolean - Whether the test passed or not. True for passed, false for a failure.
     */
    public function getPassed() : bool;


    /**
     * Retrieve the test (or a copy of the test), that is responsible for this result.
     * @return TestInterface
     */
    public function getTest() : TestInterface;
}

