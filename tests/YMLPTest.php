<?php namespace Alphagenetica\YMLP\Tests;

class YMLPTest extends \PHPUnit_Framework_TestCase
{

    protected $ymlp;

    public function __construct()
    {

        $apiKey = 'abc123';
        $username = 'dummy';
        $output = 'xml';

        $this->ymlp = new \Alphagenetica\YMLP\YMLP($apiKey, $username, $output);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function ping_returns_yes_or_no()
    {
        $result = $this->ymlp->ping();
        $this->assertContains('hello', $result);
    }
}
