# Txiki Callback

Simple callback manager for PHP

[![Author](http://img.shields.io/badge/author-@dieg0v-blue.svg?style=flat-square)](https://twitter.com/dieg0v)
[![Latest Version](https://img.shields.io/github/release/dieg0v/txiki-callback.svg?style=flat-square)](https://github.com/dieg0v/txiki-callback/releases)
[![Packagist Version](https://img.shields.io/packagist/v/txiki/callback.svg?style=flat-square)](https://packagist.org/packages/txiki/callback)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/dieg0v/txiki-callback/master.svg?style=flat-square)](https://travis-ci.org/dieg0v/txiki-callback)

## Install

Via Composer

``` bash
$ composer require txiki/callback
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 5.4
* PHP 5.5
* PHP 5.6
* HHVM

## Documentation

Simple examples:

``` php
require '../vendor/autoload.php';

use Txiki\Callback\Call;
use Txiki\Callback\CallableObject;

class DummyClass{
	public function myMethod($foo, $bar)
	{
		return 'Out '.$foo.' - '.$bar;
	}
}

$cObject = new CallableObject( 'DummyClass::myMethod' , ['foor', 'bar']);

// return 'Out foo - bar';
echo $result = Call::dispatch($cObject);

$a = 'extra';
$cObject = new CallableObject( 
	function($foo, $bar) use ($a) { 
		return 'Out '.$foo.' - '.$bar.' - '.$a; 
	} , 
	['foor', 'bar']
);

// return 'Out foor - bar - extra';
echo $result = Call::dispatch($cObject);
```

## Testing

``` bash
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/dieg0v/txiki-callback/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Diego Vilariño](https://github.com/dieg0v)
- [All Contributors](https://github.com/dieg0v/txiki-callback/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/dieg0v/txiki-callback/blob/master/LICENSE.md) for more information.
