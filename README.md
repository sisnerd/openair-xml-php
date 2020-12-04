## Synopsis

This project is designed to interact cleanly with NetSuite's OpenAir Application using XML and PHP.

## Code Example

see example.php

## Motivation

A project I'm building for my company and wanted to write a comprehensive service to interact with the API

## Installation

Using the code is fairly simple.  Curently there's no installation method, just clone the code, and start editing the example file.

The included `composer.json` file defines a PSR-4 compatible solution for autoloading the library classes. Run the following command to generate the autoload files via composer:

```
composer dump-autoload
```

This will create a file `vendor/autoload.php` that should be `required` to use classes in the OpenAir namespace.

## API Reference

Doc coming later.  For now, see example.php.

See [The OpenAir XML API Guide](https://www.openair.com/download/OpenAirXMLAPIGuide.pdf) for additional details about the API that this library uses.

## Tests

To run the tests, use phpunit 7.5 (included in composer require-dev). To set up, be sure to run `composer update` to load in the dev dependencies.

The run the test suite, use the following command:

```
cd tests && ../vendor/bin/phpunit . && cd ..
```
