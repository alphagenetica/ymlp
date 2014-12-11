<?php namespace Alphagenetica\YMLP\Tests\Exception;

use Alphagenetica\YMLP\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Exception\Exception
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Exception\Exception('Testing Exception');
    }

    public function testException()
    {
        $this->assertEquals('Testing Exception', $this->object->getMessage());
    }
}
