<?php

namespace Txiki\Callback;

/**
 * Callable Interface
 */
interface ICallable
{
    /**
     * Get callback
     *
     * @return \Clousure
     */
    public function getCallable();

    /**
     * Get params
     *
     * @return array
     */
    public function getParams();
}
