<?php namespace Alphagenetica\YMLP\Tests\Exception;

use Alphagenetica\YMLP\Exception\APIAccessNotAllowed;

class APIAccessNotAllowedTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var APIAccessNotAllowed
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new APIAccessNotAllowed('Testing APIAccessNotAllowed');
    }

    public function testAPIAccessNotAllowed()
    {
        $this->assertEquals('Testing APIAccessNotAllowed', $this->object->getMessage());
    }
}
