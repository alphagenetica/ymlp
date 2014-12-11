<?php namespace Alphagenetica\YMLP\Tests\Exception;

use Alphagenetica\YMLP\Exception\APIAccessDisabled;

class APIAccessDisabledTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var APIAccessDisabled
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new APIAccessDisabled('Testing APIAccessDisabled');
    }

    public function testAPIAccessDisabled()
    {
        $this->assertEquals('Testing APIAccessDisabled', $this->object->getMessage());
    }
}
