<?php

/*
 * A basic interface for a test.
 */

namespace Programster\Testing;

interface TestInterface
{
    /**
     * Get the name for this test. This should preferably be unique. E.g. "TestGetUsers".
     * @return string - the name of the test.
     */
    public function getName() : string;


    /**
     * Get a description for this test. E.g. "Testing that as an admin, I can create a new user."
     * @return string - the description of the test.
     */
    public function getDescription() : string;


    /**
     * Run the test.
     * @return TestResult - the result of the test. This is what is used to determine if the test failed or not.
     */
    public function run() : TestResult;
}

