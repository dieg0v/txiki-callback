<?php

namespace Txiki\Callback\Tests;

use Txiki\Callback\Call;
use Txiki\Callback\CallableObject;

/**
 * Call Test class
 */
class CallTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Asserts call
     *
     * @return void
     */
    public function testCall()
    {
        $c = new CallableObject(function () {return 'ok';}, []);
        $result = Call::dispatch($c);
        $this->assertEquals($result, 'ok');

        $c = new CallableObject('Txiki\Callback\Tests\DummyClass::method1', [1, 'test']);
        $result = Call::dispatch($c);
        $this->assertEquals($result, 'Hello world 1 test');

        $c = new CallableObject('Txiki\Callback\Tests\DummyClass::method2', ['test', 1]);
        $result = Call::dispatch($c);
        $this->assertEquals($result, 'Hello world test 1');
    }

    /**
     * Asserts call exception
     *
     * @return void
     */
    public function testCallException()
    {
        $this->setExpectedException('Txiki\Callback\CallException', 'Non callable object found', 0);

        $c = new CallableObject('fail', []);
        $result = Call::dispatch($c);
    }
}
