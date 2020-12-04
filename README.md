## Synopsis

This project is designed to interact cleanly with NetSuite's OpenAir Application using XML and PHP.

## Motivation

A project I'm building for my company and wanted to write a comprehensive service to interact with the API

## Installation

Using the code is fairly simple.  Curently there's no installation method, just clone the code, and start editing the example file.

The included `composer.json` file defines a PSR-4 compatible solution for autoloading the library classes. Run the following command to generate the autoload files via composer:

```
composer dump-autoload
```

This will create a file `vendor/autoload.php` that should be `required` to use classes in the OpenAir namespace.

## Code Example

There are a few examples in the directory `examples`

To run them, you must copy the file `examples/env.php.dist` to `examples/env.php`, then edit that file to include the correct credentials for your sandbox or production instance of openair.

The `env.php` file looks like this:

```
<?php

define('OA_NAMESPACE', 'default');
define('OA_KEY', '__your_key__');
define('OA_COMPANY_ID', '__your_company_id__');
define('OA_USERNAME', '__your_username__');
define('OA_PASSWORD', '__your_password__');
```

## API Reference

Doc coming later.  For now, see example.php.

See [The OpenAir XML API Guide](https://www.openair.com/download/OpenAirXMLAPIGuide.pdf) for additional details about the API that this library uses.

## Tests

To run the tests, use phpunit 7.5 (included in composer require-dev). To set up, be sure to run `composer update` to load in the dev dependencies.

The run the test suite, use the following command:

```
cd tests && ../vendor/bin/phpunit . && cd ..
```
