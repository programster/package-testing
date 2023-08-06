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
     * Get a message for the result. E.g. "Test successful!", or "Unexpected item in bagging area."
     * @return string
     */
    public function getMessage() : string;


    /**
     * Retrieve the test (or a copy of the test), that is responsible for this result.
     * @return TestInterface
     */
    public function getTest() : TestInterface;
}

