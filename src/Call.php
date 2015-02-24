<?php

namespace Txiki\Callback;

use Txiki\Callback\ICallable;

class Call
{
	public static function dispatch(ICallable $object )
	{
		$params = $object->getParams();
		$call = $object->getCallable();

		if (is_callable($call)) {
			return call_user_func_array($call, $params);
		}

		return false;
	}
}
