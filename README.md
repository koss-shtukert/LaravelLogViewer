Laravel LogViewer
=================

Laravel LogViewer was created by, and is maintained by [Koss Shtukert](https://github.com/koss-shtukert), and provides a LogViewer admin module for [Laravel 5](http://laravel.com). Feel free to check out the [releases](https://github.com/koss-shtukert/LaravelLogViewer/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

<p align="center">
<a href="https://travis-ci.org/koss-shtukert/LaravelLogViewer"><img src="https://travis-ci.org/koss-shtukert/LaravelLogViewer.svg?branch=master&style=flat" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/koss-shtukert/LaravelLogViewer"><img src="https://img.shields.io/scrutinizer/g/koss-shtukert/LaravelLogViewer.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/koss-shtukert/LaravelLogViewer/releases"><img src="https://img.shields.io/github/release/koss-shtukert/LaravelLogViewer.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## Installation

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel LogViewer, simply add the following line to the require block of your `composer.json` file:

```
composer require koss-shtukert/logviewer
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel LogViewer is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'KossShtukert\LogViewer\LogViewerServiceProvider'`


## Configuration

Laravel LogViewer supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/logviewer.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

There are two config options:

##### Middleware

This option (`'middleware'`) defines the middleware to be put in front of the endpoints provided by this package. A common use will be for your own authentication middleware. The default value for this setting is `[]`.

##### Per Page

This option (`'per_page'`) defines defines how many log entries are displayed per page. The default value for this setting is `20`.

##### Layout

This option (`'layout'`) defines the layout to extend when building views. The default value for this setting is `'layouts.default'`.


## Usage

In order for it to work in any Laravel application, you must ensure that you know how to use my [Laravel Core](https://github.com/koss-shtukert/Laravel-Core) package as configuration and knowledge of the `app:install` and `app:update ` commands is required.

Laravel LogViewer will register four routes. The only one of interest to you is `'logviewer'` (`logviewer.index`) as it will be the main entry point for the use of this package. You can checkout the other three routes in the [source](https://github.com/koss-shtukert/LaravelLogViewerblob/master/src/routes.php) if you must.


## License

Laravel LogViewer is licensed under [The MIT License (MIT)](LICENSE).
