<?php

namespace Txiki\Callback;

use Txiki\Callback\ICallable;

/**
 * Callable Object class
 */
class CallableObject implements ICallable
{
    /**
     * Callback
     *
     * @var \Clousure
     */
    private $callable;

    /**
     * Param array
     *
     * @var array
     */
    private $params = [];

    /**
     * CallableObject constructor
     *
     * @param \Clousure	$callable
     * @param array     $params
     */
    public function __construct($callable, $params = [])
    {
        $this->callable = $callable;
        $this->params = $params;
    }

    /**
     * Get callback
     *
     * @return \Clousure
     */
    public function getCallable()
    {
        return $this->callable;
    }

    /**
     * Get params
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}
