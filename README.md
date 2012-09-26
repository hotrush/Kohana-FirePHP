# Kohana-FirePHP

FirePHP module for kohana 3.2.

## Requirements

* Firefox 9+
* FireBug 1.9+ extention for Firefox
* FirePHP extention for Firefox

## Installation:

* copy kofirephp library to modules folder
* enable it in bootstrap.php
    ...
    'kofirephp' => MODPATH.'kofirephp'
    ...

## Usage

	$firephp = KoFirephp::factory();
	$firephp->log('Hello FirePHP');

## Links

* http://www.firephp.org/
* http://www.firephp.org/HQ/Use.htm