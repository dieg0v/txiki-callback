<?php

namespace Txiki\Callback;

use Txiki\Callback\ICallable;

class CallableObject implements ICallable
{
	private $callable;

	private $params = [];

	public function __construct($callable, $params = [])
	{
		$this->callable = $callable;
		$this->params = $params;
	}

	public function getCallable()
	{
		return $this->callable;
	}

	public function getParams()
	{
		return $this->params;
	}
}
